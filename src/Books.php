<?php

declare(strict_types=1);

namespace Codestep\HolyBible;

enum Books: string
{
    case GENESIS = 'gn';
    case EXODUS = 'ex';
    case LEVITICUS = 'lv';
    case NUMBERS = 'nm';
    case DEUTERONOMY = 'dt';
    case JOSHUA = 'js';
    case JUDGES = 'jz';
    case RUTH = 'rt';
    case FIRST_SAMUEL = '1sm';
    case SECOND_SAMUEL = '2sm';
    case FIRST_KINGS = '1rs';
    case SECOND_KINGS = '2rs';
    case FIRST_CHRONICLES = '1cr';
    case SECOND_CHRONICLES = '2cr';
    case ESDRAS = 'ed';
    case NEHEMIAH = 'ne';
    case ESTHER = 'et';
    case JOB = 'job';
    case PSALMS = 'sl';
    case PROVERBS = 'pv';
    case ECCLESIASTES = 'ec';
    case SONG_OF_SOLOMON = 'ct';
    case ISAIAH = 'is';
    case JEREMIAH = 'jr';
    case LAMENTATIONS = 'lm';
    case EZEKIEL = 'ez';
    case DANIEL = 'dn';
    case HOSEA = 'os';
    case JOEL = 'jl';
    case AMOS = 'am';
    case OBADIAH = 'ob';
    case JONAH = 'jn';
    case MICAH = 'mq';
    case NAHUM = 'na';
    case HABAKKUK = 'hc';
    case ZEPHANIAH = 'sf';
    case HAGGAI = 'ag';
    case ZECHARIAH = 'zc';
    case MALACHI = 'ml';
    case MATTHEW = 'mt';
    case MARK = 'mc';
    case LUKE = 'lc';
    case JOHN = 'jo';
    case ACTS_OF_THE_APOSTLES = 'at';
    case ROMANS = 'rm';
    case FIRST_CORINTHIANS = '1co';
    case SECOND_CORINTHIANS = '2co';
    case GALATIANS = 'gl';
    case EPHESIANS = 'ef';
    case PHILIPPIANS = 'fp';
    case COLOSSIANS = 'cl';
    case FIRST_THESSALONIANS = '1ts';
    case SECOND_THESSALONIANS = '2ts';
    case FIRST_TIMOTHY = '1tm';
    case SECOND_TIMOTHY = '2tm';
    case TITUS = 'tt';
    case PHILEMON = 'fm';
    case HEBREWS = 'hb';
    case JAMES = 'tg';
    case FIRST_PETER = '1pe';
    case SECOND_PETER = '2pe';
    case FIRST_JOHN = '1jo';
    case SECOND_JOHN = '2jo';
    case THIRD_JOHN = '3jo';
    case JUDAS = 'jd';
    case APOCALYPSE = 'ap';
}