<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    (function($){
        $(function(){
            <?php echo "M.toast({html: '" . $message . "', classes: 'light-blue darken-3'});"; ?>
        });
    })(jQuery);
</script>
