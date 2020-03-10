<?php
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use Carbon/Carbon 

use App\Model\BonusPayslip;
use App\Model\BonusPayslipItem;
use App\Model\BudgetHourlyNumber;
use App\Model\BudgetItem;
use App\Model\Company;
use App\Model\CompanyDetail;
use App\Model\ManagementGroup;
use App\Model\MonthWork;
use App\Model\Payslip;
use App\Model\PayslipItem;
use App\Model\ShiftWork;
use App\Model\ShiftWorkDetail;
use App\Model\Staff;
use App\Model\StaffDetail;
use App\Model\StaffsManagementGroups;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Company::class, function (Faker $faker) {
	$cdate = Carbon::now()->subYears(rand(1, 4))->subMonths(rand(1, 6)->subWeeks(rand(1, 5));

    return [
        'created_at' => $cdate->toDateTimeString(),
        'updated_at' => $cdate->addWeeks(rand(20, 100)),
        'name' => $faker->name,
        'is_active' => $faker->randomElement([0,1]),
        'start_date' => $cdate->toDateTimeString(),
        'end_date' => $cdate->addYears(rand(2,4))->addWeeks(rand(1, 5)),
        'first_month' => '1',
        'week_start_day' => '1',
        'day_closing_time' => '0000',
        'timezone' => $zone = $faker->randomElement(['Asia/Tokyo','Asia/Kolkata','Europe/London']),
        'locale' => ($zone == 'Europe/London' ? 'en' : 'ja'),
        'currency_code' => ($zone == 'Europe/London' ? 'GBP' :  ($zone == 'Asia/Kolkata' ? 'INR' : 'JPY' )),
        'currency_position' => '1',
        'currency_scale' => $faker->randomElement([0,2],
        'is_first_login' => $faker->randomElement([0,1]),
        'is_leadming_coordinated' => '0',
        'share_task_flg' => '1',
        'sync_google_task_flg' => '0',
        'customer_code' => Str::random(10),
        'staff_recorder_flg' => '1',
        'other_visible_flg' => '1',
        'country_cd' => ($zone == 'Europe/London' ? 'GB' :  ($zone == 'Asia/Kolkata' ? 'IN' : 'JP' )),
        'is_payming' => '0',
        'is_early_extra_time_active' => '1',
        'is_extra_time_active' => '1',
        'management_unit' => '1',
        'agree_prescribed_legal_work' => '0',
        'agree_prescribed_non_legal_work' => '1',
        'agree_prescribed_legal_prescribed_holiday_work' => '0',
        'agree_prescribed_non_legal_prescribed_holiday_work' => '1',
        'agree_non_prescribed_prescribed_holiday_work' => '1',
        'agree_non_prescribed_legal_prescribed_holiday_work' => '1',
        'agree_non_prescribed_non_legal_prescribed_holiday_work' => '1',
        'agree_prescribed_legal_legal_holiday_work' => '0',
        'agree_prpescribed_non_legal_legal_holiday_work' => '0',
        'agree_non_prescribed_legal_holiday_work' => '0',
        'agree_non_prescribed_legal_legal_holiday_work' => '0',
        'agree_non_prescribed_non_legal_legal_holiday_work' => '0',
        'staff_recorder_get_position_flg' => $faker->randomElement([0,1]),
        'ip_permission_flg' => '0',
        'substitute_holiday_unit' => '1',
        'is_budget' => '0',
        'is_use_variable_working' => '0',
        'permit_staff_modify_form' => '0',
        'view_mode' => '0',
        'office_hours_task_flg' => '1',

    ];
});

$factory->define(CompanyDetail::class, function (Faker $faker) {
	$cdate = Carbon::now()->subYears(1)->subMonths(rand(1, 3)->subWeeks(rand(1, 3));
	$company = Company::all()->random();
    return [
        'company_id' => $company->id,
        'created_at' => $cdate->toDateTimeString(),
        'updated_at' => $cdate->addDays(rand(1, 10)),
        'company_class' => $faker->randomElement([0,2]),
        'region_cd' => $company->country_cd,
        'zip_code' => $faker->postcode,
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'address_3' => $faker->address,
        'tel_1' => Str::random(10),
        'regular_staff_number' => rand(1, 50),
        'contact_last_name' => $faker->lastName,
        'contact_first_name' => $faker->firstName,
        'approved_user' => $faker->name,
        'approval_date' => $cdate->addDays(rand(1, 10)),
    ];
});




$factory->define(BonusPayslip::class, function (Faker $faker) {
    return [
        'staff_id' => $faker->name,
        'company_id' => $faker->name,
        'number_of_bonus_times' => $faker->name,
        'total_payment' => $faker->name,
        'total_deduction' => $faker->name,
        'net_payment' => $faker->name,
        'decide_status' => $faker->name,
        'tax_calculated' => $faker->name,
        'bonus_payment_date_id' => $faker->name,
        'transfer_to_multi_account' => $faker->name,
    ];
});
