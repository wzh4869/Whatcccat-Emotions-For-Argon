<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Whatcccat Emotions For Argon
 * Plugin URI:  https://www.shimoko.com
 * Text Domain: argon-whatcccat-emotions
 * Domain Path: /languages
 * Description: 支持Argon主题评论的"什么猫"表情包拓展，原作微博:什么猫-张DuangDuang
 * Version:     0.9
 * Author:      Shimoko
 * Author URI:  https://www.Shimoko.com
 * License:     GPLv3+
 */

    function add_more_emotions($emotionList){
		$photos_dir = plugins_url( 'photos/', __FILE__ );
        array_push(
            $emotionList,
            array(
                'groupname' => '什么猫', 
                'list' => array(
					array('type' => 'sticker', 'code' => 'whatcccat-wolaile', 'src' => $photos_dir . '1.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-yaoyaqiechi', 'src' => $photos_dir . '2.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-wind', 'src' => $photos_dir . '3.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-xingfen', 'src' => $photos_dir . '4.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-si', 'src' => $photos_dir . '5.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-wohaiyoushi', 'src' => $photos_dir . '6.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-lashi', 'src' => $photos_dir . '7.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-music', 'src' =>$photos_dir .  '8.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-ding', 'src' => $photos_dir . '9.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-zhou', 'src' => $photos_dir . '10.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-bieshuole', 'src' => $photos_dir . '11.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-ele', 'src' => $photos_dir . '12.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-xu', 'src' => $photos_dir . '13.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-zhebianqing', 'src' => $photos_dir . '14.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-huomaosanzhang', 'src' => $photos_dir . '16.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-bao', 'src' => $photos_dir . '17.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-laji', 'src' => $photos_dir . '18.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-xiexie', 'src' => $photos_dir . '19.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-chaoxiong', 'src' => $photos_dir . '20.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-fuqi', 'src' => $photos_dir . '21.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-kun', 'src' => $photos_dir . '22.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-chahuiyao', 'src' => $photos_dir . '23.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-chou', 'src' => $photos_dir . '24.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-ke', 'src' => $photos_dir . '25.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-guaiqiao', 'src' => $photos_dir . '26.webp'),
					array('type' => 'sticker', 'code' => 'whatcccat-aini', 'src' => $photos_dir . '27.webp'),
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions');
?>
