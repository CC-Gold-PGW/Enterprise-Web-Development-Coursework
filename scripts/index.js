$(function () {
    // Assign links to Yea and Nay images to correct Thank You page
    $(`#lablRight`).on(`click`, function(){
        $(location).attr(`href`, `nayThankYou.php`);
    });
    $(`#lablLeft`).on(`click`, function(){
        $(location).attr(`href`, `yeaThankYou.php`);
    });
});