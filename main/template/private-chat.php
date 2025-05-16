<?php include 'structure/check_cookies.php'; ?>
<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Handicrafts - Chat</title>
    <!-- Favicon icon-->


    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css"/>
    <link rel="stylesheet" href="../assets/css/bulk-style.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/emoji/uikit.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
    <style>
  /* Reset existing message styles */
  .msger-chat {
    display: flex;
    flex-direction: column;
    padding: 20px;
    overflow-y: auto;
    max-height: calc(100vh - 250px);
  }

  .msg {
    display: flex;
    margin-bottom: 15px;
    width: 100%;
  }

  /* Left message - Absolutely positioned to the left */
  .left-msg {
    align-self: flex-start;
    max-width: 70%;
    margin-right: auto;
    position: relative;
  }

  /* Right message - Absolutely positioned to the right */
  .right-msg {
    align-self: flex-end;
    max-width: 70%;
    margin-left: auto;
    position: relative;
    flex-direction: row-reverse;
  }

  .msg-img {
    width: 40px;
    height: 40px;
    margin: 0 10px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 50%;
    flex-shrink: 0;
  }

  .left-msg .msg-img {
    background-image: url("../assets/images/blog/comment.jpg");
  }

  .right-msg .msg-img {
    background-image: url("../assets/images/avtar/3.jpg");
  }

  .msg-bubble {
    padding: 12px;
    border-radius: 15px;
  }

  .left-msg .msg-bubble {
    background: #f1f1f1;
    border-bottom-left-radius: 0;
    color: #333;
  }

  .right-msg .msg-bubble {
    background: #4CAF50;
    color: white;
    border-bottom-right-radius: 0;
  }

  .msg-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
  }

  .msg-info-name {
    font-weight: bold;
    font-size: 0.85em;
  }

  .msg-info-time {
    font-size: 0.75em;
    opacity: 0.7;
  }

  .msg-text {
    word-break: break-word;
  }
</style>
  </head>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
       <!-- Page header start-->
      <?php include 'structure/header.php'; ?>
      <!-- Page header end-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        <?php include 'structure/sidebar.php'; ?>
        <!-- Page sidebar end-->
        <div class="page-body">
          <div class="container-fluid chat-page">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Private Chat</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Chat</li>
                    <li class="breadcrumb-item active">Private Chat</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row g-0">
              <div class="col-xxl-3 col-xl-4 col-md-5 box-col-5">
                <div class="left-sidebar-wrapper card">
                  <div class="left-sidebar-chat">
                    <div class="input-group"><span class="input-group-text"><i class="search-icon text-gray" data-feather="search"></i></span>
                      <input class="form-control" type="text" placeholder="Search here.."/>
                    </div>
                  </div>
                  <div class="advance-options"> 
                    <div class="tab-content" id="chat-options-tabContent">
                      <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                        <ul class="chats-user">
                          <!-- Message Sender Here -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-9 col-xl-8 col-md-7 box-col-7">
                <div class="card right-sidebar-chat">
                  <div class="right-sidebar-title">
                    <div class="common-space"> 
                      <div class="chat-time"> 
                        <div class="active-profile"><img class="img-fluid rounded-circle" src="../assets/images/blog/comment.jpg" alt="user"/>
                        </div>
                        <div> <span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="right-sidebar-Chats"> 
                    <div class="msger">
                      <div class="msger-chat">
                          <!-- Message will be Here -->
                      </div>
                      <form class="msger-inputarea" id="send-message">
                        <div class="dropdown-form dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-plus"></i>
                          <div class="chat-icon dropdown-menu dropdown-menu-start">
                            <div class="dropdown-item mb-2">
                              <svg>
                                <use href="../assets/svg/icon-sprite.svg#camera"></use>
                              </svg>
                            </div>
                            <div class="dropdown-item">
                              <svg>
                                <use href="../assets/svg/icon-sprite.svg#attchment"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <input class="msger-input" type="text" placeholder="Type Message here.."/>
                        <div class="open-emoji">
                          <div class="second-btn uk-button"></div>
                        </div>
                        <button class="msger-send-btn" type="submit"><i class="fa-solid fa-location-arrow"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <?php include 'structure/footer.php'; ?>

      </div>
    </div>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- feather-->
    <script src="../assets/js/vendors/feather-icon/feather.min.js"></script>
    <script src="../assets/js/vendors/feather-icon/custom-script.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- touchspin-->
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- common_chat-->
    <script src="../assets/js/common-chat.js"></script>
    <!-- emoji_bar-->
    <script src="../assets/js/emoji-js/uikit.min.js"></script>
    <script src="../assets/js/emoji-js/custom-emoji.js"></script>
    <script src="../assets/js/emoji-js/custom-emojis.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>

    <script>
      $(document).ready(function() {
    // Debug check to confirm JavaScript is running
    // console.log('Chat script loaded');

    let currentSenderUsername = '';

    // Function to load senders
    function loadSenders() {
        // console.log('Loading senders...');
        $.ajax({
            url: 'mysql/get_messages_sender.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // console.log('Senders loaded:', data);
                if (data.error) {
                    console.error('Error fetching senders:', data.error);
                    return;
                }
                $('.chats-user').empty();

                data.forEach(function(sender) {
                    const listItem = `
                        <li class="common-space" data-sender-username="${sender.sender_username}">
                          <div class="chat-time">
                            <div class="active-profile">
                              <img class="img-fluid rounded-circle" src="../assets/images/avtar/3.jpg" alt="user"/>
                            </div>
                            <div>
                              <span>${sender.first_name} ${sender.middle_name} ${sender.last_name}</span>
                            </div>
                          </div>
                        </li>
                    `;
                    $('.chats-user').append(listItem);
                });

                // Attach click handler
                $('.chats-user li').on('click', function() {
                    const senderUsername = $(this).data('sender-username');
                    // Update current sender for message sending
                    currentSenderUsername = senderUsername;
                    // console.log('Selected sender:', currentSenderUsername);

                    // Update header with sender name
                    const senderName = $(this).find('span').text();
                    $('.right-sidebar-title .chat-time span').text(senderName);

                    // Fetch messages for this sender
                    loadMessagesForSender(senderUsername);

                    // Add active class to selected sender
                    $('.chats-user li').removeClass('active');
                    $(this).addClass('active');
                });
            },
            error: function(xhr, status, error) {
                console.error('AJAX error loading senders:', error);
            }
        });
    }

    // Function to load messages for a specific sender - UPDATED to use is_read
    function loadMessagesForSender(senderUsername) {
        // console.log('Loading messages for:', senderUsername);
        $.ajax({
            url: 'mysql/get_messages_by_sender.php',
            method: 'POST',
            data: { sender_username: senderUsername },
            dataType: 'json',
            success: function(messages) {
                // console.log('Messages loaded:', messages);
                if (messages.error) {
                    console.error('Error fetching messages:', messages.error);
                    return;
                }
                // Clear current chat
                $('.msger-chat').empty();

                // Loop through messages using is_read to determine direction
                messages.forEach(function(msg) {
                    // Using is_read to determine message direction
                    // is_read = 1: message on right side (sent)
                    // is_read = 0: message on left side (received)
                    const isSent = parseInt(msg.is_read) === 1;

                    // Debug log to verify logic
                    // console.log(`Message: "${msg.message_text.substring(0, 20)}...", is_read: ${msg.is_read}, isSent: ${isSent}`);

                    const msgHTML = `
                        <div class="msg ${isSent ? 'right-msg' : 'left-msg'}">
                          <div class="msg-img"></div>
                          <div class="msg-bubble">
                            <div class="msg-info">
                              <div class="msg-info-name">${isSent ? 'You' : (msg.first_name + ' ' + msg.last_name)}</div>
                              <div class="msg-info-time">${formatTimestamp(msg.timestamp)}</div>
                            </div>
                            <!-- If msg.image_path is present, display it as an image -->
                            ${msg.image_path ? `<img src="../../homepage/mysql/${msg.image_path}" alt="Image" class="msg-image" />` : ''}
                            <div class="msg-text">${msg.message_text}</div>
                          </div>
                        </div>
                    `;
                    $('.msger-chat').append(msgHTML);
                });

                // Scroll to bottom of chat
                scrollToBottom();
            },
            error: function(xhr, status, error) {
                console.error('AJAX error loading messages:', error);
            }
        });
    }

    // Format timestamp
    function formatTimestamp(timestamp) {
        const date = new Date(timestamp);
        return date.toLocaleString('en-US', {
            hour: 'numeric',
            minute: 'numeric',
            hour12: true,
            month: 'short',
            day: 'numeric'
        });
    }

    // Scroll to bottom of chat
    function scrollToBottom() {
        const chatContainer = $('.msger-chat');
        chatContainer.scrollTop(chatContainer.prop('scrollHeight'));
    }

    // Send message function - UPDATED to use is_read
    function sendMessage() {
        // console.log('sendMessage function called');
        const messageInput = $('.msger-input');
        const messageText = messageInput.val().trim();

        // console.log('Message text:', messageText);
        // console.log('Current sender:', currentSenderUsername);

        if (messageText === "" || !currentSenderUsername) {
            // console.log('Empty message or no recipient selected');
            return;
        }

        // Display message immediately (optimistic UI) - always right side for sent messages
        const msgHTML = `
            <div class="msg right-msg">
              <div class="msg-img"></div>
              <div class="msg-bubble">
                <div class="msg-info">
                  <div class="msg-info-name">You</div>
                  <div class="msg-info-time">${formatTimestamp(new Date())}</div>
                </div>
                <div class="msg-text">${messageText}</div>
              </div>
            </div>
        `;
        $('.msger-chat').append(msgHTML);
        messageInput.val('');
        scrollToBottom();

        // Send message to server
        // console.log('Sending message with is_read=1 (admin sent)');

        // Send AJAX request to save the message
        $.ajax({
            url: 'mysql/send_message.php',
            method: 'POST',
            data: {
                sender_username: currentSenderUsername, // Admin is sending the message
                receiver_username: 'admin', // To the selected user
                message_text: messageText,
                is_read: 1 // Mark as sent (will display on right)
            },
            dataType: 'json',
            success: function(response) {
                // console.log('Server response:', response);
                if (response.success) {
                    // console.log('Message sent successfully');
                } else {
                    console.error('Error sending message:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error sending message:', error);
            }
        });
    }

    // Load initial senders
    loadSenders();

    // Use multiple approaches to catch the submit event
    // 1. Form submit event
    $('.msger-inputarea').on('submit', function(e) {
        // console.log('Form submitted');
        e.preventDefault();
        sendMessage();
    });

    // 2. Button click event as backup
    $('.msger-send-btn').on('click', function(e) {
        // console.log('Send button clicked');
        e.preventDefault();
        sendMessage();
    });

    // 3. Enter key press in input
    $('.msger-input').on('keypress', function(e) {
        if (e.which === 13) { // Enter key
            // console.log('Enter key pressed');
            e.preventDefault();
            sendMessage();
        }
    });
});
    </script>
  </body>
</html>