<div class="im-page--dialogs col-4  px-0">
<!--<div class="im-page-header ui_search">
<div class="ui_search_input_block">
<svg class="search-button_users" xmlns="http://www.w3.org/2000/svg" height="33" viewBox="0 0 24 24" width="33"><path d="m20.7 19.3-3.1-3.1c.9-1.2 1.4-2.6 1.4-4.2 0-3.9-3.1-7-7-7s-7 3.1-7 7 3.1 7 7 7c1.6 0 3-.5 4.2-1.4l3.1 3.1c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4zm-13.7-7.3c0-2.8 2.2-5 5-5s5 2.2 5 5-2.2 5-5 5-5-2.2-5-5z" fill="#828282"></path></svg>
<input type="text" placeholder="Поиск">
</div>

</div>-->
<?php while($row = $result->fetch_assoc()): 
    $message_row = null; // Сброс значения $message_row
?>
    <div class="user_item" data-id="<?php echo $row['id']; ?>">
     <div class="user_item_img">
            <img src="<?php echo $row['profile_img']; ?>" alt="Profile Image">
          </div>
       <div class="user_item_column">
		  <div class="item_column_name"> <span><?php echo $row['name']; ?></span>   <?php
                // Запрос к базе данных для получения последнего сообщения и даты пользователя
                $user_id = $row['id'];
$query = "SELECT content, date, name FROM messages WHERE user_id = $user_id ORDER BY date DESC LIMIT 1";
                $message_result = $db->query($query);
                if ($message_result !== false && $message_result->num_rows > 0) {
                    $message_row = $message_result->fetch_assoc();
                    echo '<p>' . $message_row['date'] . '</p>';
                }
            ?></div>
		   <div class="item_column_message">   <?php
            if (isset($message_row)) {
                // Добавление префикса "Вы:", если в столбце name есть слово "Вы"
                if ($message_row['name'] == 'Вы') {
                    echo '<span>Вы: </span><p>' . $message_row['content'] . '</p>';
                } else {
                    echo '<p>' . $message_row['content'] . '</p>';
                }
            }
        ?>
		</div>
		  </div>
           
         
      
        
    </div>   
<?php endwhile; ?>


</div>



		<div class="vk_content col-8  px-0">

        <div class="content">
		<div class="im-page--center-empty"> <div class="im-page--center-empty-icon"> <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22.03 10c-8.48 0-14.97 5.92-14.97 12.8 0 2.47.82 4.79 2.25 6.74a1.5 1.5 0 0 1 .3.9c0 1.63-.43 3.22-.96 4.67a41.9 41.9 0 0 1-1.17 2.8c3.31-.33 5.5-1.4 6.8-2.96a1.5 1.5 0 0 1 1.69-.43 17.06 17.06 0 0 0 6.06 1.1C30.5 35.61 37 29.68 37 22.8 37 15.93 30.5 10 22.03 10zM4.06 22.8C4.06 13.9 12.3 7 22.03 7 31.75 7 40 13.88 40 22.8c0 8.93-8.25 15.81-17.97 15.81-2.17 0-4.25-.33-6.17-.95-2.26 2.14-5.55 3.18-9.6 3.34a2.2 2.2 0 0 1-2.07-3.08l.42-.95c.43-.96.86-1.9 1.22-2.9.41-1.11.69-2.18.76-3.18a14.28 14.28 0 0 1-2.53-8.08z" fill="#828282"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M43.01 18.77a1.5 1.5 0 0 0 .38 2.09c3.44 2.38 5.55 5.98 5.55 9.95 0 2.47-.81 4.78-2.25 6.73a1.5 1.5 0 0 0-.3.9c0 1.63.43 3.22.96 4.67.35.96.77 1.92 1.17 2.8-3.31-.33-5.5-1.4-6.8-2.96a1.5 1.5 0 0 0-1.69-.43 17.06 17.06 0 0 1-6.06 1.1c-2.98 0-5.75-.76-8.08-2.03a1.5 1.5 0 0 0-1.44 2.63 20.19 20.19 0 0 0 15.7 1.44c2.25 2.14 5.54 3.18 9.59 3.34a2.2 2.2 0 0 0 2.07-3.08l-.42-.95c-.44-.96-.86-1.9-1.22-2.9a11.65 11.65 0 0 1-.76-3.18 14.28 14.28 0 0 0 2.53-8.08c0-5.1-2.72-9.56-6.84-12.42a1.5 1.5 0 0 0-2.09.38z" fill="#828282"></path></svg> </div> <div class="im-page--center-empty-text"> Выберите чат<br>или <a href="" class="_im_start_new">создайте новый</a> </div> </div>
		</div>
	</div>