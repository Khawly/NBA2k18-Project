<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];
$standing_layup = $_POST['standing_layup'];
$driving_layup = $_POST['driving_layup'];
$hop_step_layup = $_POST['hop_step_layup'];
$euro_step_layup = $_POST['euro_step_layup'];
$floater = $_POST['floater'];
$use_glass = $_POST['use_glass'];
$shoot = $_POST['shoot'];
$shot_close = $_POST['shot_close'];
$shot_mid = $_POST['shot_mid'];
$shot_three = $_POST['shot_three'];
$contested_jumper_mid = $_POST['contested_jumper_mid'];
$contested_jumper_three = $_POST['contested_jumper_three'];
$stepback_jumper_mid = $_POST['stepback_jumper_mid'];
$stepback_jumper_three = $_POST['stepback_jumper_three'];
$spin_jumper = $_POST['spin_jumper'];
$step_through_shot = $_POST['step_through_shot'];
$under_basket_shot = $_POST['under_basket_shot'];
$pull_up_in_transition = $_POST['pull_up_in_transition'];
$triple_threat_pump = $_POST['triple_threat_pump'];
$triple_threat_jab = $_POST['triple_threat_jab'];
$triple_threat_idle = $_POST['triple_threat_idle'];
$triple_threat_shoot = $_POST['triple_threat_shoot'];
$setup_sizeup = $_POST['setup_sizeup'];
$setup_hesitation = $_POST['setup_hesitation'];
$drive = $_POST['drive'];
$drive_right_vs_left = $_POST['drive_right_vs_left'];
$drive_crossover = $_POST['drive_crossover'];
$drive_spin = $_POST['drive_spin'];
$drive_step_back = $_POST['drive_step_back'];
$drive_half_spin = $_POST['drive_half_spin'];
$drive_double_cross = $_POST['drive_double_cross'];
$drive_behind_back = $_POST['drive_behind_back'];
$drive_hesitation = $_POST['drive_hesitation'];
$drive_in_and_out = $_POST['drive_in_and_out'];
$no_dribble_move = $_POST['no_dribble_move'];
$attack_strong = $_POST['attack_strong'];
$dish_to_open_man = $_POST['dish_to_open_man'];
$standing_dunk = $_POST['standing_dunk'];
$driving_dunk = $_POST['driving_dunk'];
$flashy_dunk = $_POST['flashy_dunk'];
$alley_oop = $_POST['alley_oop'];
$putback_dunk = $_POST['putback_dunk'];
$crash = $_POST['crash'];
$flashy_pass = $_POST['flashy_pass'];
$alley_oop_pass = $_POST['alley_oop_pass'];
$post_up = $_POST['post_up'];
$post_back_down = $_POST['post_back_down'];
$post_aggressive_back_down = $_POST['post_aggressive_back_down'];
$post_face_up = $_POST['post_face_up'];
$post_spin = $_POST['post_spin'];
$post_drive = $_POST['post_drive'];
$post_drop_step = $_POST['post_drop_step'];
$post_hop_step = $_POST['post_hop_step'];
$roll_vs_pop = $_POST['roll_vs_pop'];
$shoot_from_post = $_POST['shoot_from_post'];
$post_hook_left = $_POST['post_hook_left'];
$post_hook_right = $_POST['post_hook_right'];
$post_fade_left = $_POST['post_fade_left'];
$post_fade_right = $_POST['post_fade_right'];
$post_shimmy_shot = $_POST['post_shimmy_shot'];
$post_hop_shot = $_POST['post_hop_shot'];
$post_stepback_shot = $_POST['post_stepback_shot'];
$post_up_and_under = $_POST['post_up_and_under'];
$on_ball_steal = $_POST['on_ball_steal'];
$pass_interception = $_POST['pass_interception'];
$contest_shot = $_POST['contest_shot'];
$block_shot = $_POST['block_shot'];
$take_charge = $_POST['take_charge'];
$foul = $_POST['foul'];
$hard_foul = $_POST['hard_foul'];

$sql5 = "INSERT INTO tendencies VALUES ('$id','$name','$level','$theme','$overall',
    '$standing_layup','$driving_layup','$hop_step_layup','$euro_step_layup','$floater',
    '$use_glass','$shoot','$shot_close','$shot_mid','$shot_three','$contested_jumper_mid',
    '$contested_jumper_three','$stepback_jumper_mid','$stepback_jumper_three','$spin_jumper',
    '$step_through_shot','$under_basket_shot','$pull_up_in_transition','$triple_threat_pump','$triple_threat_jab',
    '$triple_threat_idle','$triple_threat_shoot','$setup_sizeup','$setup_hesitation','$drive',
    '$drive_right_vs_left','$drive_crossover','$drive_spin','$drive_step_back','$drive_half_spin',
    '$drive_double_cross','$drive_behind_back','$drive_hesitation','$drive_in_and_out','$no_dribble_move',
    '$attack_strong','$dish_to_open_man','$standing_dunk','$driving_dunk','$flashy_dunk',
    '$alley_oop','$putback_dunk','$crash','$flashy_pass','$alley_oop_pass',
    '$post_up','$post_back_down','$post_aggressive_back_down','$post_face_up','$post_spin',
    '$post_drive','$post_drop_step','$post_hop_step','$roll_vs_pop','$shoot_from_post',
    '$post_hook_left','$post_hook_right','$post_fade_left','$post_fade_right','$post_shimmy_shot',
    '$post_hop_shot','$post_stepback_shot','$post_up_and_under','$on_ball_steal','$pass_interception',
    '$contest_shot','$block_shot','$take_charge','$foul','$hard_foul');";
    
mysqli_query($conn,$sql5);
    header("Location: ../MyTeamFlip.php?addtendencies=success");
?>