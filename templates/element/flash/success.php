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
            <?php echo "M.toast({html: '" . $message . "', classes: 'green darken-1'});"; ?>
        });
    })(jQuery);
</script>



