/**
 * Created by yuka on 6/15/18.
 */

jQuery(document).ready(function($) {


//youtube動画の読み込み

$('document').ready(function() {
    var options = { videoId: 'HFUreAm3Kt8'};
    $('#douga').tubular(options);
});

//Flexbox で全体を中央に配置しつつ最後の行を左揃えにする処理

var $grid = $('.grid'),
    emptyCells = [],
    i;

for (i = 0; i < $grid.find('.cell').length; i++) {
    emptyCells.push($('<ul>', { class: 'cell is-empty' }));
}

$grid.append(emptyCells);

//test




});