<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        $rows = [
            [
                'parent_id' => '0',
                'menu_name' => 'Users',
                'menu_link' => '/user',
                'menu_controller' => 'UserController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-user-circle" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '2'
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Roles',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-wrench" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '3'
            ],
          
            [
                'parent_id' => '0',
                'menu_name' => 'Configuration',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '4'
            ],


            [
                'parent_id' => '0',
                'menu_name' => 'Logs',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-child" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '5'
            ],

            [
                'parent_id' => '2',
                'menu_name' => 'Menus',
                'menu_link' => '/roles/menu',
                'menu_controller' => 'MenuController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-list" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '0'
            ],

            [
                'parent_id' => '2',
                'menu_name' => 'User Groups',
                'menu_link' => '/roles/group',
                'menu_controller' => 'UserGroupController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-group" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '1'
            ],
            [
                'parent_id' => '2',
                'menu_name' => 'Role Access',
                'menu_link' => '/roles/roleAccessIndex',
                'menu_controller' => 'RoleAccessController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-unlock" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '2'
            ],
            [
                'parent_id' => '3',
                'menu_name' => 'Designation',
                'menu_link' => '/configurations/designation',
                'menu_controller' => 'DesignationController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-address-card" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '3'
            ],

            [
                'parent_id' => '3',
                'menu_name' => 'Fiscal Year',
                'menu_link' => '/configurations/fiscalYear',
                'menu_controller' => 'FiscalYearController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-calendar-check-o" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '5'
            ],
            [
                'parent_id' => '3',
                'menu_name' => 'Department',
                'menu_link' => '/configurations/department',
                'menu_controller' => 'DepartmentController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-building" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '1'
            ],
            [
                'parent_id' => '3',
                'menu_name' => 'Country',
                'menu_link' => '/configurations/country',
                'menu_controller' => 'CountryController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-map-o" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '9'
            ],
          
         
         
          
            [
                'parent_id' => '4',
                'menu_name' => 'Login Logs',
                'menu_link' => '/logs/loginLogs',
                'menu_controller' => 'LogController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-user-plus" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '1'
            ],

            [
                'parent_id' => '4',
                'menu_name' => 'Failed Login Logs',
                'menu_link' => '/logs/failLoginLogs',
                'menu_controller' => 'LogController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-user-times" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '2'
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Frontend',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-wrench" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '20'
            ],
            [
                'parent_id' => '14',
                'menu_name' => 'Slider',
                'menu_link' => '/slider',
                'menu_controller' => 'SliderController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '11'
            ],

            [
                'parent_id' => '14',
                'menu_name' => 'About',
                'menu_link' => '/about_us',
                'menu_controller' => 'AboutController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '14'
            ],

            [
                'parent_id' => '14',
                'menu_name' => 'Board Members',
                'menu_link' => '/board_members',
                'menu_controller' => 'BoardMemberController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '14'
            ],

            [
                'parent_id' => '14',
                'menu_name' => 'Services',
                'menu_link' => '/services',
                'menu_controller' => 'ServicesController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '15'
            ],

            [
                'parent_id' => '14',
                'menu_name' => 'Why we?',
                'menu_link' => '/whyWe',
                'menu_controller' => 'WhyWeController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '15'
            ],
            [
                'parent_id' => '14',
                'menu_name' => 'Clients',
                'menu_link' => '/clients',
                'menu_controller' => 'ClientsController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],
            [
                'parent_id' => '14',
                'menu_name' => 'Projects',
                'menu_link' => '/projects',
                'menu_controller' => 'ProjectsController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],
            [
                'parent_id' => '14',
                'menu_name' => 'News and Events',
                'menu_link' => '/news',
                'menu_controller' => 'NewsController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],
            [
                'parent_id' => '14',
                'menu_name' => 'Map',
                'menu_link' => '/map',
                'menu_controller' => 'MapController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],

            [
                'parent_id' => '0',
                'menu_name' => 'Settings',
                'menu_link' => '/settings',
                'menu_controller' => 'SettingsController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Queries',
                'menu_link' => '/queries',
                'menu_controller' => 'ContactController',
                'menu_css' => '',
                'menu_icon' => '<i class="fa fa-gears" aria-hidden="true"></i>',
                'menu_status' => '1',
                'menu_order' => '16'
            ],



           

           
        ];
        DB::table('menus')->insert($rows);
    }
}
