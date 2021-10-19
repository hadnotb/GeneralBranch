<svg viewBox="0 0 <?=$size?> <?=$size?> ">
    <?php foreach ($grid as $rowIndex => $row): ?>
        <?php foreach ($row as $colIndex => $color ): ?>
            <rect x="<?=$colIndex?>" y="<?=$rowIndex?>" width="1" height="1" fill="<?=$color?>" />';
        <?php endforeach; ?>
    <?php endforeach; ?>
</svg>