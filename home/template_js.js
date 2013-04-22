/**
 * Created with JetBrains WebStorm.
 * User: vargentum
 * Date: 22.04.13
 * Time: 18:11
 * To change this template use File | Settings | File Templates.
 */


$(function(){
    $('.js-editable').each(function(){
        var trigger = $(this).find('.js-editable__trigger');
        var save = $(this).find('.js-editable__save');
        var invisibleObj = $(this).find('.js-editable__hidden');
        var visibleObj = $(this).find('.js-editable__show');
        var label = $(this).find('.js-editable__label');
        var input = $(invisibleObj).find('input[type=text]');
        var textarea = $(invisibleObj).find('textarea');


        /*show - hide*/
        $(invisibleObj).hide();
        $(trigger).click(function(){
            $(this).hide();
            $(save).show();
            $(invisibleObj).show();
            $(visibleObj).hide();
            /*grab text from html to inputs*/
//            $(input).each(function(){
//                var i = $(this).index();
//                $(this).attr('placeholder', $(label[i]).html());
//                $(this).val('');
//            });
//            $(textarea).each(function(){
//                var i = $(this).index();
//                $(this).attr('placeholder', $(label[i]).html());
//                $(this).val('');
//            });
            return false;
        });
        $(save).click(function(){
            $(this).hide();
            $(trigger).show();
            $(invisibleObj).hide();
            $(visibleObj).show();
            /*grab text from inputs to html*/
//            $(label).each(function(){
//                var i = $(this).index();
//                $(this).html($(input[i]).val());
//                $(this).html($(textarea[i]).val());
//            });
            return false;
        });
    });
});