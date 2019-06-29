    <div class=""w3-container"">
      
       
        <div class="w3-container w3-center">
            <img class="w3-border w3-padding" src="<?php echo base_url()."assets/images/banner.jpg";?>" alt="Image" style="width:100%;max-width:400px;max-height:400px;"  />
            &nbsp;
        </div>
        
        <!-- Table -->
        <?php $sno = 1;?>
        
        <?php if(isset($notification_records) && !empty($notification_records)){?>
        <table class="w3-table w3-bordered" id="table-sort">
            <thead>
            <th colspan="6">Notifications</th>
            </thead>
            <tr>
                <th>SNo</th>
                <th><b>Category</b></th>
                <th><b>Date</b></th>
                <th><b>Title</b></th>
                <th><b>Link</b></th>
            </tr>
            
                <?php foreach($notification_records as $notification){?>
                <tr >
                <td><?php echo $sno++;?></td>
                <td><?php echo $notification->notification_category;?></td>
                <td><?php echo date("d-M-Y",strtotime($notification->notification_date));?></td>                
                <td><?php echo $notification->title ;?></td>
                <td><a href="<?php echo $notification->link;?>" target="_blank">Notification File</a></td>
                </tr>
                <?php } ?>
            
        </table>
        <?php } ?>
    </div><!-- /.container -->
    
    <h4>Alternative Website:<a href="http://knruhs.telangana.gov.in"> click here</a></h4>


   