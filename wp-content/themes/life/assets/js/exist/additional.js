function voteFromMain() {
    var form = $('#main-vote-new-form').serialize();
    var url = "/poll/poll/vote";
    $.ajax({
        type: "POST",
        url: url,
        data: form, // serializes the form's elements.
        success: function (data)
        {
            if (data == 1) {
//                $('.vote-vote').toggleClass('hide');
//                $('.vote-result').toggleClass('hide');
//                $('#vote-vote-accept').toggleClass('hide');
                $('#main-vote-result').html('ааАб аГаОаЛаОб ббббаН!');
                $('#vote-button-vote').hide();

            }
            else {
                $('#main-vote-result').html('аб баЖаЕ ббаАббаВаОаВаАаЛаИ аВ аГаОаЛаОбаОаВаАаНаИаИ!');
//                $(parent).find('.poll-detail-result').html('<div><strong class="text-error">аб баЖаЕ ббаАббаВаОаВаАаЛаИ аВ аГаОаЛаОбаОаВаАаНаИаИ</strong></div>')
            }

            $('#vote-button-vote').remove();
            $('#vote-button-vote-toggle').remove();
        }
    });
}
;