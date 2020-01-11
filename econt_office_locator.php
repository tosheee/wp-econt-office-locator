<!-- ----------------START Econt locator modul jQuery Modal ---------------------- -->

<div id="ex1" class="modal" style="max-width: 98%; max-height:100%;">
    <p>Моля, попълнете полето за населеното място и натиснете бутона "Търсене", след това изберете най - удобния офис на Еконт за Вас.</p>
    <iframe frameborder="0" id="officeLocator" scrolling="no" frameborder="0" style="border: medium none; width: 1200px; height: 500px;" src="https://www.bgmaps.com/templates/econt?office_type=to_office_courier&shop_url=<?php echo home_url();?>&address= --- Изберете ---" class="cboxIframe"></iframe>

    <a href="#" rel="modal:close">Затвори</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<!-- ------------------- Link to open the modal ---------------------------- -->
<p>
    <p>Моля, използвайте бутона "ЕКОНТ ОФИС ЛОКАТОР" за да намерите най-удобния офис на Еконт за Вас.</p>
    <a href="#ex1" rel="modal:open" style="background-color: #1e6eff;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;">ЕКОНТ ОФИС ЛОКАТОР</a></p>

<script>
    jQuery(document).ready(function($){

        window.addEventListener('message', listenMessage, false);

        function listenMessage(event) {
            var result = event.data;
            if(typeof result === 'string'){
                var full_address = result.split("||")
                console.log(full_address);
                $('#select2-billing_country-container').text('Bulgaria');
                $('#select2-billing_country-container').prop('readonly', true);

                $('#billing_address_1').val('Офис на Еконт:'+ full_address[3]);
                $('#bbilling_address_1').prop('readonly', true);

                $('#billing_city').val(full_address[1]);
                $('#billing_city').prop('readonly', true);

                $('#billing_postcode').val(full_address[0]);
                $('#billing_postcode').prop('readonly', true);

                $('.close-modal').click();
            }
        }
    });
</script>
<!-- --------------END Econt locator modul------------------------------- -->
