<?php

// Минимальный балл мужчины

/**
 * Минимальный пороговый балл мужчин. <br >
 * В зависимости от возраста
 *
 * @var array $MIN_BALL_M [AGE]
 * return (int)
 */
$MIN_BALL_M = array(
    1 => 30,
    2 => 28,
    3 => 24,
    4 => 22,
    5 => 20,
    6 => 16,
    7 => 12,
    8 => 6,
);

/**
 * Минимальный пороговый балл женщины . <br >
 * В зависимости от возраста [AGE]
 *
 * @var array $MIN_BALL_W
 * return (int)
 */
$MIN_BALL_W = array(
    1 => 28,
    2 => 26,
    3 => 24,
    4 => 22,
    5 => 20,
    6 => 18,
);
/**
 * Баллы для рассчета оценки мужчин<br>
 *
 * @var array $BALLI_M [AGE,KATEGORIYA,UPRAG]<br>
 * 3 - 3<br>
 * 4 - 4<br>
 * 5 - 5 (третий уровень)<br>
 * 6 - 2 уровень<br>
 * 7 - 1 уровень<br>
 * 8 - высший уровень<br>
 *
 */
$BALLI_M =
    // возраст
    array(
        // категория
        array(
            // упражнений
            array(
                array(
                    // 1 возрастная 1 категория 3 упражнения
                    3 => 140,
                    4 => 200,
                    5 => 220,
                    6 => 240,
                    7 => 250,
                    8 => 260
                ),
                array(
                    // 1 возрастная 1 категория 4 упражнения
                    3 => 190,
                    4 => 260,
                    5 => 290,
                    6 => 310,
                    7 => 320,
                    8 => 330
                ),
                array(
                    // 1 возрастная 1 категория 5 упражнения
                    3 => 250,
                    4 => 330,
                    5 => 360,
                    6 => 380,
                    7 => 390,
                    8 => 400
                ),
            ),
            array(
                array(  // 1 возрастная 2 категория 3 упражнения
                    3 => 140,
                    4 => 190,
                    5 => 210,
                    6 => 230,
                    7 => 240,
                    8 => 250
                ),
                array(
                    // 1 возрастная 2 категория 4 упражнения
                    3 => 180,
                    4 => 250,
                    5 => 280,
                    6 => 300,
                    7 => 310,
                    8 => 320
                ),
                array( // 1 возрастная 2 категория 5 упражнения
                    3 => 230,
                    4 => 310,
                    5 => 350,
                    6 => 370,
                    7 => 380,
                    8 => 390
                ),
            ),
            array(
                array(  // 1 возрастная 3 категория 3 упражнения
                    3 => 130,
                    4 => 180,
                    5 => 200,
                    6 => 220,
                    7 => 230,
                    8 => 240
                ),
                array(  // 1 возрастная 3 категория 4 упражнения
                    3 => 170,
                    4 => 240,
                    5 => 270,
                    6 => 290,
                    7 => 300,
                    8 => 310
                ),
                array(  // 1 возрастная 3 категория 5 упражнения
                    3 => 220,
                    4 => 300,
                    5 => 340,
                    6 => 360,
                    7 => 370,
                    8 => 380
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 2 возрастная 1 категория 3 упражнения
                    3 => 140,
                    4 => 180,
                    5 => 200,
                    6 => 220,
                    7 => 230,
                    8 => 240
                ),
                array(  // 2 возрастная 1 категория 4 упражнения
                    3 => 180,
                    4 => 230,
                    5 => 260,
                    6 => 280,
                    7 => 290,
                    8 => 300
                ),
                array(  // 2 возрастная 1 категория 5 упражнения
                    3 => 210,
                    4 => 290,
                    5 => 320,
                    6 => 340,
                    7 => 350,
                    8 => 360
                ),
            ),
            array(
                array(  // 2 возрастная 2 категория 3 упражнения
                    3 => 130,
                    4 => 170,
                    5 => 190,
                    6 => 210,
                    7 => 220,
                    8 => 230
                ),
                array(  // 2 возрастная 2 категория 4 упражнения
                    3 => 170,
                    4 => 220,
                    5 => 250,
                    6 => 270,
                    7 => 280,
                    8 => 290
                ),
                array(  // 2 возрастная 2 категория 5 упражнения
                    3 => 210,
                    4 => 280,
                    5 => 310,
                    6 => 330,
                    7 => 340,
                    8 => 350
                ),
            ),
            array(
                array(  // 2 возрастная 3 категория 3 упражнения
                    3 => 120,
                    4 => 160,
                    5 => 180,
                    6 => 200,
                    7 => 210,
                    8 => 220
                ),
                array(  // 2 возрастная 3 категория 4 упражнения
                    3 => 160,
                    4 => 210,
                    5 => 240,
                    6 => 260,
                    7 => 270,
                    8 => 280
                ),
                array(  // 2 возрастная 3 категория 5 упражнения
                    3 => 200,
                    4 => 270,
                    5 => 300,
                    6 => 320,
                    7 => 330,
                    8 => 340
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 3 возрастная 1 категория 3 упражнения
                    3 => 120,
                    4 => 160,
                    5 => 180,
                    6 => 200,
                    7 => 210,
                    8 => 220
                ),
                array(  // 3 возрастная 1 категория 4 упражнения
                    3 => 160,
                    4 => 210,
                    5 => 240,
                    6 => 250,
                    7 => 260,
                    8 => 270
                ),
                array(  // 3 возрастная 1 категория 5 упражнения
                    3 => 190,
                    4 => 250,
                    5 => 290,
                    6 => 300,
                    7 => 310,
                    8 => 320
                ),
            ),
            array(
                array(  // 3 возрастная 2 категория 3 упражнения
                    3 => 110,
                    4 => 150,
                    5 => 170,
                    6 => 180,
                    7 => 190,
                    8 => 200
                ),
                array(  // 3 возрастная 2 категория 4 упражнения
                    3 => 150,
                    4 => 200,
                    5 => 230,
                    6 => 240,
                    7 => 250,
                    8 => 260
                ),
                array(  // 3 возрастная 2 категория 5 упражнения
                    3 => 170,
                    4 => 240,
                    5 => 270,
                    6 => 280,
                    7 => 290,
                    8 => 300
                ),
            ),
            array(
                array(  // 3 возрастная 3 категория 3 упражнения
                    3 => 100,
                    4 => 140,
                    5 => 160,
                    6 => 170,
                    7 => 180,
                    8 => 190
                ),
                array(  // 3 возрастная 3 категория 4 упражнения
                    3 => 140,
                    4 => 190,
                    5 => 220,
                    6 => 230,
                    7 => 240,
                    8 => 250
                ),
                array(  // 3 возрастная 3 категория 5 упражнения
                    3 => 150,
                    4 => 220,
                    5 => 250,
                    6 => 260,
                    7 => 270,
                    8 => 280
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 4 возрастная 1 категория 3 упражнения
                    3 => 100,
                    4 => 150,
                    5 => 170,
                    6 => 190,
                    7 => 200,
                    8 => 210
                ),
                array(  // 4 возрастная 1 категория 4 упражнения
                    3 => 140,
                    4 => 200,
                    5 => 230,
                    6 => 240,
                    7 => 250,
                    8 => 260
                ),
                array(  // 4 возрастная 1 категория 5 упражнения
                    3 => 170,
                    4 => 230,
                    5 => 270,
                    6 => 280,
                    7 => 290,
                    8 => 300
                ),
            ),
            array(
                array(  // 4 возрастная 2 категория 3 упражнения
                    3 => 90,
                    4 => 140,
                    5 => 160,
                    6 => 170,
                    7 => 180,
                    8 => 190
                ),
                array(  // 4 возрастная 2 категория 4 упражнения
                    3 => 120,
                    4 => 180,
                    5 => 210,
                    6 => 230,
                    7 => 240,
                    8 => 250
                ),
                array(  // 4 возрастная 2 категория 5 упражнения
                    3 => 150,
                    4 => 220,
                    5 => 250,
                    6 => 260,
                    7 => 270,
                    8 => 280
                ),
            ),
            array(
                array(  // 4 возрастная 3 категория 3 упражнения
                    3 => 80,
                    4 => 130,
                    5 => 150,
                    6 => 160,
                    7 => 170,
                    8 => 180
                ),
                array(  // 4 возрастная 3 категория 4 упражнения
                    3 => 110,
                    4 => 170,
                    5 => 200,
                    6 => 220,
                    7 => 230,
                    8 => 240
                ),
                array(  // 4 возрастная 3 категория 5 упражнения
                    3 => 130,
                    4 => 200,
                    5 => 230,
                    6 => 260,
                    7 => 270,
                    8 => 280
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 5 возрастная 1 категория 3 упражнения
                    3 => 90,
                    4 => 120,
                    5 => 140,
                    6 => 160,
                    7 => 170,
                    8 => 180
                ),
                array(  // 5 возрастная 1 категория 4 упражнения
                    3 => 120,
                    4 => 160,
                    5 => 190,
                    6 => 210,
                    7 => 220,
                    8 => 230
                ),
                array(  // 5 возрастная 1 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 5 возрастная 2 категория 3 упражнения
                    3 => 80,
                    4 => 100,
                    5 => 130,
                    6 => 150,
                    7 => 160,
                    8 => 170
                ),
                array(  // 5 возрастная 2 категория 4 упражнения
                    3 => 110,
                    4 => 140,
                    5 => 180,
                    6 => 200,
                    7 => 210,
                    8 => 230
                ),
                array(  // 5 возрастная 2 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 5 возрастная 3 категория 3 упражнения
                    3 => 70,
                    4 => 90,
                    5 => 120,
                    6 => 140,
                    7 => 150,
                    8 => 160
                ),
                array(  // 5 возрастная 3 категория 4 упражнения
                    3 => 100,
                    4 => 120,
                    5 => 160,
                    6 => 180,
                    7 => 190,
                    8 => 200
                ),
                array(  // 5 возрастная 3 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 6 возрастная 1 категория 3 упражнения
                    3 => 80,
                    4 => 90,
                    5 => 120,
                    6 => 140,
                    7 => 150,
                    8 => 160
                ),
                array(  // 6 возрастная 1 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 6 возрастная 1 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 6 возрастная 2 категория 3 упражнения
                    3 => 60,
                    4 => 70,
                    5 => 100,
                    6 => 120,
                    7 => 130,
                    8 => 140
                ),
                array(  // 6 возрастная 2 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 6 возрастная 2 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 6 возрастная 3 категория 3 упражнения
                    3 => 50,
                    4 => 60,
                    5 => 90,
                    6 => 110,
                    7 => 120,
                    8 => 130
                ),
                array(  // 5 возрастная 3 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 5 возрастная 3 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 7 возрастная 1 категория 3 упражнения
                    3 => 70,
                    4 => 80,
                    5 => 110,
                    6 => 130,
                    7 => 140,
                    8 => 150
                ),
                array(  // 7 возрастная 1 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 7 возрастная 1 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 7 возрастная 2 категория 3 упражнения
                    3 => 50,
                    4 => 60,
                    5 => 90,
                    6 => 110,
                    7 => 120,
                    8 => 130
                ),
                array(  // 7 возрастная 2 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 7 возрастная 2 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 7 возрастная 3 категория 3 упражнения
                    3 => 40,
                    4 => 50,
                    5 => 80,
                    6 => 100,
                    7 => 110,
                    8 => 120
                ),
                array(  // 7 возрастная 3 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 7 возрастная 3 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
        ),
        // категория
        array(
            // упражнений
            array(
                array(  // 8 возрастная 1 категория 3 упражнения
                    3 => 60,
                    4 => 80,
                    5 => 100,
                    6 => 120,
                    7 => 130,
                    8 => 140
                ),
                array(  // 8 возрастная 1 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 8 возрастная 1 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 8 возрастная 2 категория 3 упражнения
                    3 => 40,
                    4 => 60,
                    5 => 80,
                    6 => 90,
                    7 => 100,
                    8 => 110
                ),
                array(  // 8 возрастная 2 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 8 возрастная 2 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
            array(
                array(  // 8 возрастная 3 категория 3 упражнения
                    3 => 30,
                    4 => 50,
                    5 => 70,
                    6 => 90,
                    7 => 100,
                    8 => 110
                ),
                array(  // 8 возрастная 3 категория 4 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
                array(  // 8 возрастная 3 категория 5 упражнения
                    3 => null,
                    4 => null,
                    5 => null,
                    6 => null,
                    7 => null,
                    8 => null
                ),
            ),
        ),
    );

/**
 * Баллы для рассчета оценки женщины<br>
 *
 * @var array $BALLI_W [AGE]<br>
 * 3 - 3<br>
 * 4 - 4<br>
 * 5 - 5 (третий уровень)<br>
 * 6 - 2 уровень<br>
 * 7 - 1 уровень<br>
 * 8 - высший уровень<br>
 *
 */
$BALLI_W =
    // возраст
    array(
        // категория
        array(  // 1 возрастная
            3 => 110,
            4 => 140,
            5 => 160,
            6 => 180,
            7 => 190,
            8 => 200
        ),
        array(  // 2 возрастная
            3 => 90,
            4 => 120,
            5 => 140,
            6 => 160,
            7 => 170,
            8 => 180
        ),
        array(  // 3 возрастная
            3 => 80,
            4 => 110,
            5 => 130,
            6 => 150,
            7 => 160,
            8 => 170
        ),
        array(  // 4 возрастная
            3 => 70,
            4 => 100,
            5 => 120,
            6 => 140,
            7 => 150,
            8 => 160
        ),
        array(  // 5 возрастная
            3 => 60,
            4 => 90,
            5 => 110,
            6 => 130,
            7 => 140,
            8 => 150
        ),
        array(  // 6 возрастная
            3 => 50,
            4 => 80,
            5 => 100,
            6 => 120,
            7 => 130,
            8 => 140
        ),
    );

/**
 * Баллы для рассчета баллов из оценки для мужчин<br>
 *
 * @var array $OCENCA_FROM_BALL_M [AGE, КАТЕГОРИЯ]<br>
 * 3 <br>
 * 4 <br>
 * 5 <br>
 *
 */
$BALL_FROM_OCENKA_M =
    // возраст
    array(
        // категория
        1 => array(
            1 => array(  // 1 возрастная 1 категория
                2 => 0,
                3 => 45,
                4 => 65,
                5 => 75
            ),
            2 => array(  // 1 возрастная 2 категория
                2 => 0,
                3 => 45,
                4 => 65,
                5 => 70
            ),
            3 => array(  // 1 возрастная 2 категория
                2 => 0,
                3 => 45,
                4 => 60,
                5 => 65,
            )
        ),
        2 => array(
            1 => array(  // 2 возрастная 1 категория
                2 => 0,
                3 => 45,
                4 => 60,
                5 => 65
            ),
            2 => array(  // 2 возрастная 2 категория
                2 => 0,
                3 => 45,
                4 => 55,
                5 => 65
            ),
            3 => array(  // 2 возрастная 3 категория
                2 => 0,
                3 => 45,
                4 => 60,
                5 => 65,
            )
        ),
        3 => array(
            1 => array(  // 3 возрастная 1 категория
                2 => 0,
                3 => 40,
                4 => 55,
                5 => 60
            ),
            2 => array(  // 3 возрастная 2 категория
                2 => 0,
                3 => 35,
                4 => 50,
                5 => 55
            ),
            3 => array(  // 3 возрастная 3 категория
                2 => 0,
                3 => 35,
                4 => 45,
                5 => 55,
            )
        ),
        4 => array(
            1 => array(  // 4 возрастная 1 категория
                2 => 0,
                3 => 35,
                4 => 50,
                5 => 55
            ),
            2 => array(  // 4 возрастная 2 категория
                2 => 0,
                3 => 30,
                4 => 45,
                5 => 55
            ),
            3 => array(  // 4 возрастная 3 категория
                2 => 0,
                3 => 25,
                4 => 45,
                5 => 50,
            )
        ),
        5 => array(
            1 => array(  // 5 возрастная 1 категория
                2 => 0,
                3 => 30,
                4 => 40,
                5 => 55
            ),
            2 => array(  // 5 возрастная 2 категория
                2 => 0,
                3 => 25,
                4 => 35,
                5 => 45
            ),
            3 => array(  // 5 возрастная 3 категория
                2 => 0,
                3 => 25,
                4 => 30,
                5 => 40,
            )
        ),
        6 => array(
            1 => array(  // 6 возрастная 1 категория
                2 => 0,
                3 => 25,
                4 => 30,
                5 => 40
            ),
            2 => array(  // 6 возрастная 2 категория
                2 => 0,
                3 => 20,
                4 => 25,
                5 => 35
            ),
            3 => array(  // 6 возрастная 3 категория
                2 => 0,
                3 => 17,
                4 => 20,
                5 => 30,
            )
        ),
        7 => array(
            1 => array(  // 7 возрастная 1 категория
                2 => 0,
                3 => 20,
                4 => 25,
                5 => 35
            ),
            2 => array(  // 7 возрастная 2 категория
                2 => 0,
                3 => 15,
                4 => 20,
                5 => 30
            ),
            3 => array(  // 7 возрастная 3 категория
                2 => 0,
                3 => 15,
                4 => 20,
                5 => 25,
            )
        ),
        8 => array(
            1 => array(  // 8 возрастная 1 категория
                2 => 0,
                3 => 20,
                4 => 25,
                5 => 35
            ),
            2 => array(  // 8 возрастная 2 категория
                2 => 0,
                3 => 15,
                4 => 20,
                5 => 25
            ),
            3 => array(  // 8 возрастная 3 категория
                2 => 0,
                3 => 10,
                4 => 15,
                5 => 25,
            )
        ),

    );


/**
 * Баллы для рассчета баллов из оценки для женщин<br>
 *
 * @var  array $OCENCA_FROM_BALL_M [AGE]<br>
 * 3 <br>
 * 4 <br>
 * 5 <br>
 *
 */
$BALL_FROM_OCENKA_W =
    array(
        // категория
        1 => array(// 1 возрастная
            3 => 35,
            4 => 40,
            5 => 60
        ),
        2 => array(// 2 озрастная
            3 => 30,
            4 => 40,
            5 => 50
        ),
        3 => array(// 3возрастная
            3 => 25,
            4 => 35,
            5 => 45
        ),
        4 => array(// 4 возрастная
            3 => 25,
            4 => 35,
            5 => 40
        ),
        5 => array(// 5 возрастная
            3 => 20,
            4 => 30,
            5 => 35
        ),
        6 => array(// 6 возрастная
            3 => 18,
            4 => 25,
            5 => 35
        ),
    );

/**
 * массив подстановочных значений для определения оценки и пр.
 *
 * @var array $SCORE
 *
 */
$SCORE = array(
    3 => array(
        'score' => 3,
        'score_prefix' => 'удовлетворительно',
        'level' => '',
        'color' => 'text-warning',
    ),
    4 => array(
        'score' => 4,
        'score_prefix' => 'хорошо',
        'level' => '',
        'color' => 'text-primary',
    ),
    5 => array(
        'score' => 5,
        'score_prefix' => 'отлично',
        'level' => '3 уровень',
        'color' => 'text-success',
    ),
    6 => array(
        'score' => 5,
        'score_prefix' => 'отлично',
        'level' => '2 уровень',
        'color' => 'text-success',
    ),
    7 => array(
        'score' => 5,
        'score_prefix' => 'отлично',
        'level' => '1 уровень',
        'color' => 'text-success',
    ),
    8 => array(
        'score' => 5,
        'score_prefix' => 'отлично',
        'level' => 'высший уровень',
        'color' => 'text-success',
    )
);

/**
 * Массив подстановочных значений для определения оценки и пр.
 *
 * @var  array $OCENKI_TEXT
 */
$OCENKI_TEXT = array(
    2 => array(
        'text' => array(
            'Ни в какие ворота',
            'Очень плохо ',
            'Так не годится',
            'К сожалению, увы',
            'Чувство стыда и негодование',
            'Не похоже на Олимпийчкого чемпиона'
        ),
        'text2' => array(
            'С таким подходом мы завалим эту сдачу, соберись, спортсмен.',
            'Здесь не школа, оценки можно и повыше получать ',
            'Забыл сказать, если есть двойка то это и общая оценка двойка',
            'Понял как не надо, давай еще раз и нормально',
        ),
        'color' => 'text-danger'
    ),
    3 => array(
        'text' => array(
            'Ничего так',
            'Уже что-то',
            'С этим можно работать',
            'Для новичка неплохо',
            'Удовлетворил',
            'И так сойдет'
        ),
        'text2' => array(
            'Не лучший результат, но сойдет',
            'На безрыбье и рак - рыба',
            'Уверен ты способен на большее',
            'Если нужно троечка то сойдет',
        ),
        'color' => 'text-warning'
    ),
    4 => array(
        'text' => array(
            'Очень хорошо',
            'Молодец',
            'Среднячок',
        ),
        'text2' => array(
            'Так держать',
        ),
        'color' => 'text-primary'
    ),
    5 => array(
        'text' => array(
            'Очень молодец',
            'Отличник',
            'Дай пять',
        ),
        'text2' => array(
            'Вот это понимаю результат',
        ),
        'color' => 'text-success'
    )

);

