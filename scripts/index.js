$(function () {
    $(`#lablRight`).on(`click`, function(){
        $(location).attr(`href`, `nayThankYou.php`);
    });
    $(`#lablLeft`).on(`click`, function(){
        $(location).attr(`href`, `yeaThankYou.php`);
    });
});