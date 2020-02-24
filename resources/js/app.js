/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

$('#generate-new-profile').click( function(){
    $(this).prop('disabled', true);
    console.log('here');
    var rand = Math.floor(Math.random() * 5000) + 1;
    $('.generate-author-thumb img').attr('src', 'https://api.adorable.io/avatars/' + rand);
    $(this).prop('disabled', false);
    $('.new_profile_val').val(rand);
});

$('.delete_user_popup').click( function(){
    var userId = $(this).attr('data-userid');
    $('.delete_user_id').val(userId);
    console.log('clicked ' + userId);
});

$('.update_user_popup').click( function(){
    var userId = $(this).attr('data-userid');
    $('.update_user_id').val(userId);
    console.log('clicked ' + userId);
});