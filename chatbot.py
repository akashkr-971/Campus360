from flask import Flask, request, jsonify
from flask_cors import CORS
import requests
import json

app = Flask(__name__)
CORS(app)

# Ollama API endpoint (local instance)
OLLAMA_API_URL = "http://localhost:11434/api/generate"

def get_ollama_response(prompt, model_name="ReGenAI"):
    """Fetch response from Ollama API with stream."""
    try:
        payload = {
            "model": model_name,
            "prompt": prompt,
            "stream": True  # Enable streaming for real-time chunks
        }
        response = requests.post(OLLAMA_API_URL, json=payload, stream=True)
        response.raise_for_status()

        full_response = ""
        for chunk in response.iter_lines():
            if chunk:
                data = json.loads(chunk.decode('utf-8'))
                chunk_text = data.get("response", "")
                full_response += chunk_text
                # Yield each chunk for real-time processing (optional for SSE)
                # For simplicity, we'll return the full response here
        return full_response.strip()
    except requests.RequestException as e:
        print(f"Error with Ollama API: {str(e)}")
        return "Sorry, I encountered an error processing your request."

@app.route('/chat', methods=['POST'])
def chat():
    """Handle chat requests and return Ollama response."""
    try:
        data = request.get_json()
        if not data or 'message' not in data:
            return jsonify({'error': 'No message received'}), 400
        
        user_message = data['message']
        print(f"Received message: {user_message}")
        
        response = get_ollama_response(user_message)
        print(f"Response: {response}")
        
        return jsonify({'response': response})
    
    except Exception as e:
        print(f"Error: {str(e)}")
        return jsonify({'error': 'Internal server error'}), 500

if __name__ == '__main__':
    app.run(port=5000, debug=True)