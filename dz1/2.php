<?php
// второе задание
const PICTURE = 80; // всего рисунков
const PICTURE_MARKERS = 23; // рисунки выполненные фломастерами
const PICTURE_PENCILS = 40; // рисунки карандашами
const PICTURE_PAINTS = PICTURE - PICTURE_MARKERS - PICTURE_PENCILS; // рисунки красками

echo 'Рисунков, выполненных красками, на школьной выставке - ' . PICTURE_PAINTS;
