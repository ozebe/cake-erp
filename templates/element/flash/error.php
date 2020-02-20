<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    (function($){
        $(function(){
            <?php echo "M.toast({html: '" . $message . "', classes: 'red accent-4'});"; ?>
        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
