<?php
// Check if the 'DWHMA' cookie is present
if (!isset($_COOKIE['DWHMA0'])) {
    // Redirect to index.php
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DWHMA Online Store - Messaging</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="theme-color" content="#4CAF50" />

  <!-- Favicons -->
<!--   <link href="homepage/assets/img/favicon.png" rel="icon">
  <link href="homepage/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="homepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="homepage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="homepage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="homepage/assets/css/main.css" rel="stylesheet">

  <style>
    /* Flex layout to push footer down */
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    /* Make main content expand */
    .main {
      flex: 1;
    }

    /* Keep footer at bottom if content is short */
    footer {
      margin-top: auto;
    }

    /* Chat styling */
    .chat-display {
      display: flex;
      flex-direction: column;
      padding: 15px;
      overflow-y: auto;
    }

    .message {
      margin-bottom: 15px;
      max-width: 70%;
      display: flex;
      flex-direction: column;
    }

    .sent {
      align-self: flex-end;
    }

    .received {
      align-self: flex-start;
    }

    .message-bubble {
      padding: 10px 15px;
      border-radius: 18px;
      box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    .sent .message-bubble {
      background-color: #4CAF50;
      color: white;
      border-bottom-right-radius: 5px;
    }

    .received .message-bubble {
      background-color: #f1f1f1;
      color: #333;
      border-bottom-left-radius: 5px;
    }

    .message-text {
      font-size: 15px;
      margin-bottom: 4px;
      word-wrap: break-word;
    }

    .message-timestamp {
      font-size: 10px;
      opacity: 0.7;
      align-self: flex-end;
    }

    /* Loading indicator */
    .loading-messages {
      text-align: center;
      padding: 15px;
      color: #888;
    }
  </style>
</head>

<body class="starter-page-page">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
      <h3 class="sitename">Dumingag Women Handicrafts Makers Association</h3>
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="ms-3 position-relative">
          <a href="pages-cart.php" class="d-flex align-items-center" title="Cart">
            Cart
            <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" style="display: none;">
              0
            </span>
          </a>
        </li>
        <li class="ms-3">
          <?php
            if (isset($_COOKIE['DWHMA0'])) {
                // Show Profile and Logout links side by side
                echo '<div style="display: flex; gap: 10px;">'; // flex container with gap
                echo '<a href="account.php" class="d-flex align-items-center" title="Profile">Profile</a>';
                echo '<a href="homepage/mysql/logout.php" class="d-flex align-items-center" title="Logout">Logout</a>';
                echo '</div>';
            } else {
                // Show Login icon
                echo '<a href="login-page.php" class="d-flex align-items-center" title="Login">';
                echo '<i class="bi bi-person" style="font-size: 1.5rem;"></i>';
                echo '</a>';
            }
          ?>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>

<main class="main">

  <section id="messaging-section" class="cart-section section py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-4">Messaging Page</h2>

      <!-- Messaging Interface -->
      <div class="messaging-interface bg-white rounded shadow mx-auto" style="max-width: 800px;">
        <!-- Chat Display Area -->
        <div class="chat-display p-3 mb-3" style="height: 400px; overflow-y: auto; text-align: left; border: 1px solid #e0e0e0; border-radius: 4px;">
          <div class="loading-messages">Loading messages...</div>
        </div>

        <!-- Message Input Form -->
        <div class="message-input-container p-3 border-top">
          <form class="message-form" enctype="multipart/form-data">
            <!-- Image preview container -->
            <div id="image-preview-container" class="mb-2" style="display: none;">
              <div class="position-relative">
                <img id="preview-image" class="img-thumbnail" style="max-height: 150px; max-width: 100%;">
                <button type="button" id="remove-image" class="btn-close position-absolute top-0 end-0 bg-white rounded-circle m-1"
                        style="font-size: 0.7rem; padding: 0.25rem;" aria-label="Remove image"></button>
              </div>
            </div>

            <div class="input-group">
              <input type="text" class="form-control message-input" placeholder="Type your message here..." aria-label="Message">

              <div class="input-group-append d-flex">
                <label for="message-image" class="btn btn-outline-secondary d-flex align-items-center justify-content-center m-0" style="border-radius: 0;">
                  <i class="bi bi-image"></i>
                </label>
                <input id="message-image" name="image" type="file" accept="image/*" style="display: none;">

                <button class="btn btn-success" type="submit">
                  <i class="bi bi-send"></i> Send
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Messaging Interface -->

    </div>
  </section>

</main>

  <footer id="footer" class="footer white-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>DWHMA Community Center</p>
            <p>Dumingag, Zamboanag del Sur</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://github.com/Wilfred1097">Wil Fred</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="homepage/assets/vendor/php-email-form/validate.js"></script>
  <script src="homepage/assets/vendor/aos/aos.js"></script>
  <script src="homepage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="homepage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="homepage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <!-- Main JS File -->
  <script src="homepage/assets/js/main.js"></script>

  <script>
    function updateCartBadge() {
        // Retrieve cart array from local storage
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const badge = document.getElementById('cart-badge');

        if (cart.length > 0) {
          badge.textContent = cart.length;
          badge.style.display = 'inline-block';
        } else {
          badge.style.display = 'none';
        }
      }

      window.addEventListener('DOMContentLoaded', updateCartBadge);
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
  // Get username from cookie for identification
  function getUserIdFromCookie() {
    const cookieName = 'DWHMA0';
    const cookies = document.cookie.split(';').map(cookie => cookie.trim());
    const targetCookie = cookies.find(cookie => cookie.startsWith(`${cookieName}=`));

    if (targetCookie) {
      try {
        // Get cookie value and decode URI components
        const cookieValue = decodeURIComponent(targetCookie.split('=')[1]);
        // Parse the JSON data
        const userData = JSON.parse(cookieValue);
        // Extract and return only the user_id
        return userData.user_id;
      } catch (error) {
        console.error('Error parsing cookie data:', error);
        return null;
      }
    }

    console.error('User cookie not found');
    return null;
  }

  const userId = getUserIdFromCookie();

  // Function to fetch messages
  function fetchMessages() {
    // Show loading indicator if chat is empty
    const chatDisplay = document.querySelector('.chat-display');
      if (!chatDisplay.querySelector('.message')) {
        chatDisplay.innerHTML = '<div class="loading-messages">Loading messages...</div>';
      }

      fetch('homepage/mysql/get_messages.php')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            displayMessages(data.messages);
          } else {
            console.error('Error fetching messages:', data.message);
            chatDisplay.innerHTML = '<div class="loading-messages">Could not load messages. Please try again.</div>';
          }
        })
        .catch(error => {
          console.error('Error fetching messages:', error);
          chatDisplay.innerHTML = '<div class="loading-messages">Error loading messages. Please refresh the page.</div>';
        });
    }

    // Function to display messages using is_read flag
    function displayMessages(messages) {
      const chatDisplay = document.querySelector('.chat-display');
      chatDisplay.innerHTML = ''; // Clear current messages

      messages.forEach(msg => {
        // Use is_read flag to determine message direction
        // is_read = 0 means the message is sent by current user (right side)
        // is_read = 1 means the message is received (left side)
        const isSent = parseInt(msg.is_read) === 0;

        // Create message container with appropriate class
        const messageElement = document.createElement('div');
        messageElement.className = `message ${isSent ? 'sent' : 'received'}`;

        // Create bubble for message content
        const bubbleElement = document.createElement('div');
        bubbleElement.className = 'message-bubble';

        // If message has an image, add it
        if (msg.image_path) {
          const imageElement = document.createElement('div');
          imageElement.className = 'message-image';

          const img = document.createElement('img');
          img.src =  'homepage/mysql/' + msg.image_path;
          img.alt = 'Attachment';
          img.style.maxWidth = '100%';
          img.style.maxHeight = '200px';
          img.style.borderRadius = '8px';
          img.style.marginBottom = '8px';

          // Make image clickable for full view
          img.style.cursor = 'pointer';
          img.addEventListener('click', function() {
            window.open(img.src, '_blank');
          });

          imageElement.appendChild(img);
          bubbleElement.appendChild(imageElement);
        }

        // Add message text if exists
        if (msg.message_text && msg.message_text.trim() !== '') {
          const textElement = document.createElement('div');
          textElement.className = 'message-text';
          textElement.textContent = msg.message_text;
          bubbleElement.appendChild(textElement);
        }

        // Add timestamp
        const timestampElement = document.createElement('div');
        timestampElement.className = 'message-timestamp';
        timestampElement.textContent = formatTimestamp(msg.timestamp);
        bubbleElement.appendChild(timestampElement);

        // Assemble message components
        messageElement.appendChild(bubbleElement);
        chatDisplay.appendChild(messageElement);
      });

      // Scroll to bottom
      scrollToBottom();
    }

    // Format timestamp for display
    function formatTimestamp(timestamp) {
      const date = new Date(timestamp);
      return date.toLocaleString('en-US', {
        month: 'short',
        day: 'numeric',
        hour: 'numeric',
        minute: '2-digit',
        hour12: true
      });
    }

    // Scroll chat to bottom
    function scrollToBottom() {
      const chatDisplay = document.querySelector('.chat-display');
      chatDisplay.scrollTop = chatDisplay.scrollHeight;
    }

    // Initial message fetch
    fetchMessages();

    // Image preview functionality
    const fileInput = document.getElementById('message-image');
    const imagePreview = document.getElementById('image-preview-container');
    const previewImage = document.getElementById('preview-image');

    if (fileInput) {
      fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
          const reader = new FileReader();

          reader.onload = function(e) {
            previewImage.src = e.target.result;
            imagePreview.style.display = 'block';
          };

          reader.readAsDataURL(this.files[0]);
        }
      });
    }

    // Remove image button
    const removeImageBtn = document.getElementById('remove-image');
    if (removeImageBtn) {
      removeImageBtn.addEventListener('click', function() {
        fileInput.value = '';
        imagePreview.style.display = 'none';
      });
    }

    // Handle form submission with image
    document.querySelector('.message-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const messageInput = this.querySelector('.message-input');
        const messageText = messageInput.value.trim();
        const fileInput = document.getElementById('message-image');
        const hasImage = fileInput && fileInput.files && fileInput.files.length > 0;

        // Don't submit empty messages without images
        if (!messageText && !hasImage) return;

        // Disable form while sending
        const submitButton = this.querySelector('button[type="submit"]');
        messageInput.disabled = true;
        submitButton.disabled = true;
        if (fileInput) fileInput.disabled = true;

        // Create FormData for file upload
        const formData = new FormData();
        formData.append('sender_username', userId);
        formData.append('message', messageText);
        formData.append('is_read', 0); // 0 means sent by current user

        if (hasImage) {
          formData.append('image', fileInput.files[0]);
        }

        // Show sending indicator
        const sendingIndicator = document.createElement('div');
        sendingIndicator.className = 'alert alert-info';
        sendingIndicator.textContent = 'Sending message...';
        sendingIndicator.style.position = 'fixed';
        sendingIndicator.style.bottom = '10px';
        sendingIndicator.style.right = '10px';
        sendingIndicator.style.zIndex = '9999';
        document.body.appendChild(sendingIndicator);

        // Send message to server using FormData
        fetch('homepage/mysql/send_message.php', {
          method: 'POST',
          body: formData // No Content-Type header needed with FormData
        })
        .then(response => {
          // Check if response is ok before parsing JSON
          if (!response.ok) {
            throw new Error(`Server returned ${response.status}: ${response.statusText}`);
          }
          return response.text(); // Get raw text first to debug any issues
        })
        .then(rawText => {
          // Try to parse JSON, but if it fails, log the raw response
          try {
            return JSON.parse(rawText);
          } catch (e) {
            console.error('Invalid JSON response:', rawText);
            throw new Error('Server returned invalid JSON response');
          }
        })
        .then(data => {
          document.body.removeChild(sendingIndicator);

          if (data.success) {
            console.log('Message sent successfully:', data);

            // Reset form
            messageInput.value = '';
            if (fileInput) fileInput.value = '';
            if (imagePreview) imagePreview.style.display = 'none';

            // Show success message
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Message sent successfully!',
              timer: 1500,
              showConfirmButton: false
            });

            // Refresh messages
            fetchMessages();
          } else {
            console.error('Error in server response:', data.message);
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: data.message || 'Failed to send message',
              timer: 3000
            });
          }
        })
        .catch(error => {
          document.body.removeChild(sendingIndicator);
          console.error('Fetch error:', error.toString());

          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: `Error sending message: ${error.toString()}`,
            timer: 5000
          });
        })
        .finally(() => {
          // Re-enable form
          messageInput.disabled = false;
          submitButton.disabled = false;
          if (fileInput) fileInput.disabled = false;
          messageInput.focus();
        });
      });
  });
  </script>
</body>
</html>