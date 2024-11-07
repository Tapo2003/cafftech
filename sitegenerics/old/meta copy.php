<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>CAFFTECH | College of Agriculture, Fisheries & Food Technology</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );?>


    <form>
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />						
    </form>

<?php ?>