<?php
$pageTitle = 'Chatbot';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Campus360' : 'Campus360'; ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .chat-container {
            margin-top:-120px;
            padding:0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .chat-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
        }
        .chat-messages {
            flex-grow: 1;
            max-height: 70vh;
            padding: 15px;
            overflow-y: auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 0 0 10px 10px;
        }
        .message {
            margin: 8px 0;
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
            word-wrap: break-word;
        }
        .user-message {
            background: #007bff;
            color: white;
            margin-left: auto;
        }
        .bot-message {
            background: #f0f0f0;
            margin-right: auto;
        }
        .chat-input-container {
            padding: 10px;
            border-top: 1px solid #ddd;
            display: flex;
        }
        .chat-input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .chat-send {
            padding: 10px 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <?php require '../includes/layout.php'; ?>
    <div class="chat-container">
        <div class="chat-header">ReGenAI</div>
        <div class="chat-messages" id="chatMessages">
            <div class="message bot-message">Hello! How can I help you today?</div>
        </div>
        <div class="chat-input-container">
            <input type="text" class="chat-input" id="userInput" placeholder="Type your message...">
            <button class="chat-send" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatBox = document.getElementById("chatBox");
            const chatContainer = document.querySelector(".chat-container");
            const userInput = document.getElementById("userInput");
            
            document.getElementById("toggleChat").addEventListener("click", function(e) {
                e.stopPropagation();
                chatBox.style.display = chatBox.style.display === "none" ? "block" : "none";
                if (chatBox.style.display === "block") {
                    userInput.focus();
                }
            });
            
            document.addEventListener('click', function(e) {
                if (chatBox.style.display === "block" && 
                    !chatContainer.contains(e.target)) {
                    chatBox.style.display = "none";
                }
            });
            
            chatBox.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        function sendMessage() {
            let userInput = document.getElementById("userInput");
            let userMessage = userInput.value.trim();
            
            if (userMessage === "") return;
            
            const chatMessages = document.getElementById("chatMessages");
            
            chatMessages.innerHTML += `<div class="message user-message">${userMessage}</div>`;
            
            const typingIndicator = `<div class="message bot-message" id="typing">Typing...</div>`;
            chatMessages.innerHTML += typingIndicator;
            
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            userInput.value = "";
            userInput.focus();

            fetch("http://localhost:5000/chat", {
                method: "POST",
                body: JSON.stringify({ message: userMessage }),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Access-Control-Allow-Origin": "*"
                }
            })
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Received data:', data);
                document.getElementById("typing").remove();
                
                if (data.error) {
                    throw new Error(data.error);
                }
                
                const formattedResponse = data.response
                    .replace(/\n/g, '<br>')
                    .replace(/ {2,}/g, function(match) {
                        return '&nbsp;'.repeat(match.length);
                    });
                
                chatMessages.innerHTML += `<div class="message bot-message">${formattedResponse}</div>`;
                chatMessages.scrollTop = chatMessages.scrollHeight;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById("typing")?.remove();
                
                chatMessages.innerHTML += `<div class="message bot-message">Sorry, there was an error connecting to the AI service. Please try again later.</div>`;
                chatMessages.scrollTop = chatMessages.scrollHeight;
            });
        }

        document.getElementById("userInput").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                sendMessage();
            }
        });
    </script>
</body>
</html>
<?php
$content = ob_get_clean(); // Capture the output into $content
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php'; // Include the layout
?>