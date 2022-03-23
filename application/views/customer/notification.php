<div class="modal" id="modal">

    <div class="modal-header">
      <div class="title">New Notifications</div>
      <button data-close-button class="close-button">&times;</button>
    </div>


    <div class="modal-body">


        
        <?php 
        if (isset($data['notifiactions'])) {
          
        
        foreach ($data['notifiactions'] as $key => $notification) {?>
        <a href="<?php echo BASEURL."/customerNotificationController/markAsRead/".$notification['notification_id'] ?>">
        <div class="form">
          
          <div class="date"><?php echo $notification['date']; ?></div>
          <div class="message"><?php echo $notification['message']; ?></div>
          <div class="order-id"><?php echo "Order ID:".$notification['order_id']; ?></div>

        </div>
        </a>
        <div class="lower-line"></div>

    <?php }} ?>
      </div>



</div>

  <div id="overlay"></div>