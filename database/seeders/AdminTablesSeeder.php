<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \OpenAdmin\Admin\Auth\Database\Menu::truncate();
        \OpenAdmin\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Dashboard",
                    "icon" => "icon-chart-bar",
                    "uri" => "/",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Admin",
                    "icon" => "icon-server",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 3,
                    "title" => "Users",
                    "icon" => "icon-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "Roles",
                    "icon" => "icon-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "Permission",
                    "icon" => "icon-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "Menu",
                    "icon" => "icon-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "Operation log",
                    "icon" => "icon-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 7,
                    "title" => "Helpers",
                    "icon" => "icon-cogs",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 8,
                    "order" => 8,
                    "title" => "Scaffold",
                    "icon" => "icon-keyboard",
                    "uri" => "helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 8,
                    "order" => 9,
                    "title" => "Database terminal",
                    "icon" => "icon-database",
                    "uri" => "helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 8,
                    "order" => 10,
                    "title" => "Laravel artisan",
                    "icon" => "icon-terminal",
                    "uri" => "helpers/terminal/artisan",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 8,
                    "order" => 11,
                    "title" => "Routes",
                    "icon" => "icon-list-alt",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 11,
                    "title" => "Cards",
                    "icon" => "icon-file",
                    "uri" => "cards",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 11,
                    "title" => "Users",
                    "icon" => "icon-file",
                    "uri" => "users",
                    "permission" => NULL
                ]
            ]
        );

        \OpenAdmin\Admin\Auth\Database\Permission::truncate();
        \OpenAdmin\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ],
                [
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers",
                    "http_method" => "",
                    "http_path" => "/helpers/*"
                ]
            ]
        );

        \OpenAdmin\Admin\Auth\Database\Role::truncate();
        \OpenAdmin\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 2
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ]
            ]
        );

        DB::table('admin_users')->truncate();
        DB::table('admin_users')->insert(
            [
                [
                'username' => 'admin@admin.com',
                'password' => '$2y$10$rGa4l9pDKY6HYyiylFrxLOWdBtlGajbKvUGocClUFTkJOKciF8rB6',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                ]
            ]
        );
        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_users')->insert(
            [
                [
                    "role_id" => 1,
                    "user_id" => 1
                ]
            ]
        );
        // finish
    }
}
