<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


Route::get('buildtree', [CustomAuthController::class, 'buildtree']); 

Route::get('index', [CustomAuthController::class, 'dashboard']); 


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');


Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/ui-alerts', function () {
    return view('ui-alerts');
})->name('ui-alerts');

Route::get('/ui-accordion', function () {
    return view('ui-accordion');
})->name('ui-accordion');

Route::get('/ui-avatar', function () {
    return view('ui-avatar');
})->name('ui-avatar');

Route::get('/ui-badges', function () {
    return view('ui-badges');
})->name('ui-badges');

Route::get('/ui-borders', function () {
    return view('ui-borders');
})->name('ui-borders');

Route::get('/ui-buttons', function () {
    return view('ui-buttons');
})->name('ui-buttons');

Route::get('/ui-buttons-group', function () {
    return view('ui-buttons-group');
})->name('ui-buttons-group');

Route::get('/ui-breadcrumb', function () {
    return view('ui-breadcrumb');
})->name('ui-breadcrumb');

Route::get('/ui-cards', function () {
    return view('ui-cards');
})->name('ui-cards');

Route::get('/ui-carousel', function () {
    return view('ui-carousel');
})->name('ui-carousel');

Route::get('/ui-colors', function () {
    return view('ui-colors');
})->name('ui-colors');

Route::get('/ui-dropdowns', function () {
    return view('ui-dropdowns');
})->name('ui-dropdowns');

Route::get('/ui-grid', function () {
    return view('ui-grid');
})->name('ui-grid');

Route::get('/ui-images', function () {
    return view('ui-images');
})->name('ui-images');

Route::get('/ui-lightbox', function () {
    return view('ui-lightbox');
})->name('ui-lightbox');

Route::get('/ui-media', function () {
    return view('ui-media');
})->name('ui-media');

Route::get('/ui-modals', function () {
    return view('ui-modals');
})->name('ui-modals');

Route::get('/ui-offcanvas', function () {
    return view('ui-offcanvas');
})->name('ui-offcanvas');

Route::get('/ui-pagination', function () {
    return view('ui-pagination');
})->name('ui-pagination');

Route::get('/ui-popovers', function () {
    return view('ui-popovers');
})->name('ui-popovers');

Route::get('/ui-progress', function () {
    return view('ui-progress');
})->name('ui-progress');

Route::get('/ui-placeholders', function () {
    return view('ui-placeholders');
})->name('ui-placeholders');

Route::get('/ui-rangeslider', function () {
    return view('ui-rangeslider');
})->name('ui-rangeslider');

Route::get('/ui-spinner', function () {
    return view('ui-spinner');
})->name('ui-spinner');

Route::get('/ui-sweetalerts', function () {
    return view('ui-sweetalerts');
})->name('ui-sweetalerts');

Route::get('/ui-nav-tabs', function () {
    return view('ui-nav-tabs');
})->name('ui-nav-tabs');

Route::get('/ui-toasts', function () {
    return view('ui-toasts');
})->name('ui-toasts');

Route::get('/ui-tooltips', function () {
    return view('ui-tooltips');
})->name('ui-tooltips');

Route::get('/ui-typography', function () {
    return view('ui-typography');
})->name('ui-typography');

Route::get('/ui-video', function () {
    return view('ui-video');
})->name('ui-video');

Route::get('/ui-ribbon', function () {
    return view('ui-ribbon');
})->name('ui-ribbon');

Route::get('/ui-clipboard', function () {
    return view('ui-clipboard');
})->name('ui-clipboard');

Route::get('/ui-drag-drop', function () {
    return view('ui-drag-drop');
})->name('ui-drag-drop');

Route::get('/ui-rating', function () {
    return view('ui-rating');
})->name('ui-rating');

Route::get('/ui-text-editor', function () {
    return view('ui-text-editor');
})->name('ui-text-editor');

Route::get('/ui-counter', function () {
    return view('ui-counter');
})->name('ui-counter');

Route::get('/ui-scrollbar', function () {
    return view('ui-scrollbar');
})->name('ui-scrollbar');

Route::get('/ui-stickynote', function () {
    return view('ui-stickynote');
})->name('ui-stickynote');

Route::get('/ui-timeline', function () {
    return view('ui-timeline');
})->name('ui-timeline');

Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');

Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');  

Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot'); 

Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');    

Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris'); 

Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');

Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');

Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');

Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');

Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');

Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');

Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');

Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');

Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');

Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');

Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');

Route::get('/form-checkbox-radios', function () {
    return view('form-checkbox-radios');
})->name('form-checkbox-radios');

Route::get('/form-floating-labels', function () {
    return view('form-floating-labels');
})->name('form-floating-labels');

Route::get('/form-grid-gutters', function () {
    return view('form-grid-gutters');
})->name('form-grid-gutters');

Route::get('/form-elements', function () {
    return view('form-elements');
})->name('form-elements');

Route::get('/form-select', function () {
    return view('form-select');
})->name('form-select');

Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');

Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');

Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');

Route::get('/form-checkbox-radios', function () {
    return view('form-checkbox-radios');
})->name('form-checkbox-radios');

Route::get('/form-floating-labels', function () {
    return view('form-floating-labels');
})->name('form-floating-labels');

Route::get('/form-grid-gutters', function () {
    return view('form-grid-gutters');
})->name('form-grid-gutters');

Route::get('/form-elements', function () {
    return view('form-elements');
})->name('form-elements');

Route::get('/form-select', function () {
    return view('form-select');
})->name('form-select');

Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');

Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');

Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/call', function () {
    return view('call');
})->name('call');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/email', function () {
    return view('email');
})->name('email');

Route::get('/todo', function () {
    return view('todo');
})->name('todo');

Route::get('/notes', function () {
    return view('notes');
})->name('notes');

Route::get('/file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('/students', function () {
    return view('students');
})->name('students');

Route::get('/students-active', function () {
    return view('students-active');
})->name('students-active');

Route::get('/students-inactive', function () {
    return view('students-inactive');
})->name('students-inactive');

Route::get('/student-grid', function () {
    return view('student-grid');
})->name('student-grid');

Route::get('/student-details', function () {
    return view('student-details');
})->name('student-details');

Route::get('/student-time-table', function () {
    return view('student-time-table');
})->name('student-time-table');

Route::get('/student-leaves', function () {
    return view('student-leaves');
})->name('student-leaves');

Route::get('/student-fees', function () {
    return view('student-fees');
})->name('student-fees');

Route::get('/student-result', function () {
    return view('student-result');
})->name('student-result');

Route::get('/student-library', function () {
    return view('student-library');
})->name('student-library');

Route::get('/add-student', function () {
    return view('add-student');
})->name('add-student');

Route::get('/edit-student', function () {
    return view('edit-student');
})->name('edit-student');

Route::get('/parents', function () {
    return view('parents');
})->name('parents');

Route::get('/parent-grid', function () {
    return view('parent-grid');
})->name('parent-grid');

Route::get('/guardians', function () {
    return view('guardians');
})->name('guardians');

Route::get('/guardian-grid', function () {
    return view('guardian-grid');
})->name('guardian-grid');

Route::get('/student-promotion', function () {
    return view('student-promotion');
})->name('student-promotion');

Route::get('/teachers', function () {
    return view('teachers');
})->name('teachers');

Route::get('/teachers-active', function () {
    return view('teachers-active');
})->name('teachers-active');

Route::get('/teachers-inactive', function () {
    return view('teachers-inactive');
})->name('teachers-inactive');

Route::get('/teacher-grid', function () {
    return view('teacher-grid');
})->name('teacher-grid');

Route::get('/add-teacher', function () {
    return view('add-teacher');
})->name('add-teacher');

Route::get('/edit-teacher', function () {
    return view('edit-teacher');
})->name('edit-teacher');

Route::get('/teacher-details', function () {
    return view('teacher-details');
})->name('teacher-details');

Route::get('/routine-teachers', function () {
    return view('routine-teachers');
})->name('routine-teachers');

Route::get('/teacher-leaves', function () {
    return view('teacher-leaves');
})->name('teacher-leaves');

Route::get('/teacher-salary', function () {
    return view('teacher-salary');
})->name('teacher-salary');

Route::get('/teacher-library', function () {
    return view('teacher-library');
})->name('teacher-library');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');

Route::get('/schedule-classes', function () {
    return view('schedule-classes');
})->name('schedule-classes');

Route::get('/class-routine', function () {
    return view('class-routine');
})->name('class-routine');

Route::get('/class-room', function () {
    return view('class-room');
})->name('class-room');

Route::get('/class-section', function () {
    return view('class-section');
})->name('class-section');

Route::get('/class-subject', function () {
    return view('class-subject');
})->name('class-subject');

Route::get('/class-home-work', function () {
    return view('class-home-work');
})->name('class-home-work');

Route::get('/exam', function () {
    return view('exam');
})->name('exam');

Route::get('/exam-schedule', function () {
    return view('exam-schedule');
})->name('exam-schedule');

Route::get('/grade', function () {
    return view('grade');
})->name('grade');

Route::get('/exam-attendance', function () {
    return view('exam-attendance');
})->name('exam-attendance');

Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/notifications-settings', function () {
    return view('notifications-settings');
})->name('notifications-settings');

Route::get('/connected-apps', function () {
    return view('connected-apps');
})->name('connected-apps');

Route::get('/company-settings', function () {
    return view('company-settings');
})->name('company-settings');

Route::get('/localization', function () {
    return view('localization');
})->name('localization');

Route::get('/prefixes', function () {
    return view('prefixes');
})->name('prefixes');

Route::get('/preferences', function () {
    return view('preferences');
})->name('preferences');

Route::get('/social-authentication', function () {
    return view('social-authentication');
})->name('social-authentication');

Route::get('/language', function () {
    return view('language');
})->name('language');

Route::get('/invoice-settings', function () {
    return view('invoice-settings');
})->name('invoice-settings');

Route::get('/custom-fields', function () {
    return view('custom-fields');
})->name('custom-fields');

Route::get('/email-settings', function () {
    return view('email-settings');
})->name('email-settings');

Route::get('/email-templates', function () {
    return view('email-templates');
})->name('email-templates');

Route::get('/sms-settings', function () {
    return view('sms-settings');
})->name('sms-settings');

Route::get('/otp-settings', function () {
    return view('otp-settings');
})->name('otp-settings');

Route::get('/gdpr-cookies', function () {
    return view('gdpr-cookies');
})->name('gdpr-cookies');

Route::get('/payment-gateways', function () {
    return view('payment-gateways');
})->name('payment-gateways');

Route::get('/tax-rates', function () {
    return view('tax-rates');
})->name('tax-rates');

Route::get('/school-settings', function () {
    return view('school-settings');
})->name('school-settings');

Route::get('/religion', function () {
    return view('religion');
})->name('religion');

Route::get('/storage', function () {
    return view('storage');
})->name('storage');

Route::get('/ban-ip-address', function () {
    return view('ban-ip-address');
})->name('ban-ip-address');

Route::get('/countries', function () {
    return view('countries');
})->name('countries');

Route::get('/states', function () {
    return view('states');
})->name('states');

Route::get('/cities', function () {
    return view('cities');
})->name('cities');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/ticket-details', function () {
    return view('ticket-details');
})->name('ticket-details');

Route::get('/ticket-grid', function () {
    return view('ticket-grid');
})->name('ticket-grid');

Route::get('/class-time-table', function () {
    return view('class-time-table');
})->name('class-time-table');

Route::get('/class-syllabus', function () {
    return view('class-syllabus');
})->name('class-syllabus');

Route::get('/exam-results', function () {
    return view('exam-results');
})->name('exam-results');

Route::get('/academic-reasons', function () {
    return view('academic-reasons');
})->name('academic-reasons');

Route::get('/fees-group', function () {
    return view('fees-group');
})->name('fees-group');

Route::get('/fees-type', function () {
    return view('fees-type');
})->name('fees-type');

Route::get('/fees-master', function () {
    return view('fees-master');
})->name('fees-master');

Route::get('/fees-assign', function () {
    return view('fees-assign');
})->name('fees-assign');

Route::get('/collect-fees', function () {
    return view('collect-fees');
})->name('collect-fees');

Route::get('/library-members', function () {
    return view('library-members');
})->name('library-members');

Route::get('/library-books', function () {
    return view('library-books');
})->name('library-books');

Route::get('/library-issue-book', function () {
    return view('library-issue-book');
})->name('library-issue-book');

Route::get('/library-return', function () {
    return view('library-return');
})->name('library-return');

Route::get('/sports', function () {
    return view('sports');
})->name('sports');

Route::get('/hostel-list', function () {
    return view('hostel-list');
})->name('hostel-list');

Route::get('/hostel-rooms', function () {
    return view('hostel-rooms');
})->name('hostel-rooms');

Route::get('/hostel-room-type', function () {
    return view('hostel-room-type');
})->name('hostel-room-type');

Route::get('/transport-routes', function () {
    return view('transport-routes');
})->name('transport-routes');

Route::get('/transport-pickup-points', function () {
    return view('transport-pickup-points');
})->name('transport-pickup-points');

Route::get('/transport-vehicle-drivers', function () {
    return view('transport-vehicle-drivers');
})->name('transport-vehicle-drivers');

Route::get('/transport-vehicle', function () {
    return view('transport-vehicle');
})->name('transport-vehicle');

Route::get('/transport-assign-vehicle', function () {
    return view('transport-assign-vehicle');
})->name('transport-assign-vehicle');

Route::get('/staffs', function () {
    return view('staffs');
})->name('staffs');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/designation', function () {
    return view('designation');
})->name('designation');

Route::get('/student-attendance', function () {
    return view('student-attendance');
})->name('student-attendance');

Route::get('/teacher-attendance', function () {
    return view('teacher-attendance');
})->name('teacher-attendance');

Route::get('/staff-attendance', function () {
    return view('staff-attendance');
})->name('staff-attendance');

Route::get('/list-leaves', function () {
    return view('list-leaves');
})->name('list-leaves');

Route::get('/approve-request', function () {
    return view('approve-request');
})->name('approve-request');

Route::get('/holidays', function () {
    return view('holidays');
})->name('holidays');

Route::get('/payroll', function () {
    return view('payroll');
})->name('payroll');

Route::get('/expenses', function () {
    return view('expenses');
})->name('expenses');

Route::get('/expenses-category', function () {
    return view('expenses-category');
})->name('expenses-category');

Route::get('/accounts-income', function () {
    return view('accounts-income');
})->name('accounts-income');

Route::get('/accounts-invoices', function () {
    return view('accounts-invoices');
})->name('accounts-invoices');

Route::get('/accounts-transactions', function () {
    return view('accounts-transactions');
})->name('accounts-transactions');

Route::get('/notice-board', function () {
    return view('notice-board');
})->name('notice-board');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/attendance-report', function () {
    return view('attendance-report');
})->name('attendance-report');

Route::get('/student-attendance-type', function () {
    return view('student-attendance-type');
})->name('student-attendance-type');

Route::get('/daily-attendance', function () {
    return view('daily-attendance');
})->name('daily-attendance');

Route::get('/student-day-wise', function () {
    return view('student-day-wise');
})->name('student-day-wise');

Route::get('/teacher-day-wise', function () {
    return view('teacher-day-wise');
})->name('teacher-day-wise');

Route::get('/teacher-report', function () {
    return view('teacher-report');
})->name('teacher-report');

Route::get('/staff-day-wise', function () {
    return view('staff-day-wise');
})->name('staff-day-wise');

Route::get('/staff-report', function () {
    return view('staff-report');
})->name('staff-report');

Route::get('/class-report', function () {
    return view('class-report');
})->name('class-report');
Route::get('/student-report', function () {
    return view('student-report');
})->name('student-report');
Route::get('/grade-report', function () {
    return view('grade-report');
})->name('grade-report');
Route::get('/leave-report', function () {
    return view('leave-report');
})->name('leave-report');
Route::get('/fees-report', function () {
    return view('fees-report');
})->name('fees-report');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/login-2', function () {
    return view('login-2');
})->name('login-2');
Route::get('/login-3', function () {
    return view('login-3');
})->name('login-3');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/register-2', function () {
    return view('register-2');
})->name('register-2');
Route::get('/register-3', function () {
    return view('register-3');
})->name('register-3');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/forgot-password-2', function () {
    return view('forgot-password-2');
})->name('forgot-password-2');
Route::get('/forgot-password-3', function () {
    return view('forgot-password-3');
})->name('forgot-password-3');
Route::get('/email-verification', function () {
    return view('email-verification');
})->name('email-verification');
Route::get('/email-verification-2', function () {
    return view('email-verification-2');
})->name('email-verification-2');
Route::get('/email-verification-3', function () {
    return view('email-verification-3');
})->name('email-verification-3');
Route::get('/two-step-verification', function () {
    return view('two-step-verification');
})->name('two-step-verification');
Route::get('/two-step-verification-2', function () {
    return view('two-step-verification-2');
})->name('two-step-verification-2');
Route::get('/two-step-verification-3', function () {
    return view('two-step-verification-3');
})->name('two-step-verification-3');
Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');
Route::get('/404-error', function () {
    return view('404-error');
})->name('404-error');
Route::get('/500-error', function () {
    return view('500-error');
})->name('500-error');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-categories', function () {
    return view('blog-categories');
})->name('blog-categories');
Route::get('/blog-comments', function () {
    return view('blog-comments');
})->name('blog-comments');
Route::get('/blog-tags', function () {
    return view('blog-tags');
})->name('blog-tags');
Route::get('/membership-plans', function () {
    return view('membership-plans');
})->name('membership-plans');
Route::get('/membership-addons', function () {
    return view('membership-addons');
})->name('membership-addons');
Route::get('/membership-transactions', function () {
    return view('membership-transactions');
})->name('membership-transactions');
Route::get('/users', function () {
    return view('users');
})->name('users');
Route::get('/roles-permission', function () {
    return view('roles-permission');
})->name('roles-permission');
Route::get('/delete-account', function () {
    return view('delete-account');
})->name('delete-account');
Route::get('/add-invoice', function () {
    return view('add-invoice');
})->name('add-invoice');
Route::get('/add-staff', function () {
    return view('add-staff');
})->name('add-staff');
Route::get('/appointments-calendar', function () {
    return view('appointments-calendar');
})->name('appointments-calendar');
Route::get('/call-history', function () {
    return view('call-history');
})->name('call-history');
Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');
Route::get('/edit-staff', function () {
    return view('edit-staff');
})->name('edit-staff');
Route::get('/permission', function () {
    return view('permission');
})->name('permission');
Route::get('/players', function () {
    return view('players');
})->name('players');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');
Route::get('/reset-password-2', function () {
    return view('reset-password-2');
})->name('reset-password-2');
Route::get('/reset-password-3', function () {
    return view('reset-password-3');
})->name('reset-password-3');
Route::get('/reset-password-success', function () {
    return view('reset-password-success');
})->name('reset-password-success');
Route::get('/reset-password-success-2', function () {
    return view('reset-password-success-2');
})->name('reset-password-success-2');
Route::get('/reset-password-success-3', function () {
    return view('reset-password-success-3');
})->name('reset-password-success-3');
Route::get('/staff-details', function () {
    return view('staff-details');
})->name('staff-details');
Route::get('/staff-leaves', function () {
    return view('staff-leaves');
})->name('staff-leaves');
Route::get('/staff-payroll', function () {
    return view('staff-payroll');
})->name('staff-payroll');
Route::get('/staffs-attendance', function () {
    return view('staffs-attendance');
})->name('staffs-attendance');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/pages', function () {
    return view('pages');
})->name('pages');
Route::get('/contact-messages', function () {
    return view('contact-messages');
})->name('contact-messages');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/teacher-dashboard', function () {
    return view('teacher-dashboard');
})->name('teacher-dashboard');
Route::get('/student-dashboard', function () {
    return view('student-dashboard');
})->name('student-dashboard');
Route::get('/parent-dashboard', function () {
    return view('parent-dashboard');
})->name('parent-dashboard');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/layout-default', function () {
    return view('layout-default');
})->name('layout-default');
Route::get('/layout-mini', function () {
    return view('layout-mini');
})->name('layout-mini');
Route::get('/layout-box', function () {
    return view('layout-box');
})->name('layout-box');
Route::get('/layout-dark', function () {
    return view('layout-dark');
})->name('layout-dark');
Route::get('/invoice', function () {
    return view('invoice');
})->name('invoice');
Route::get('/layout-rtl', function () {
    return view('layout-rtl');
})->name('layout-rtl');





















