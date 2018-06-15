/**
 * Created by yuka on 6/15/18.
 */

jQuery(document).ready(function($) {

console.log("mainjs");

var $grid = $('.grid'),
    emptyCells = [],
    i;

// 子パネル (ul.cell) の数だけ空の子パネル (ul.cell.is-empty) を追加する。
for (i = 0; i < $grid.find('.cell').length; i++) {
    emptyCells.push($('<ul>', { class: 'cell is-empty' }));
}

$grid.append(emptyCells);


});