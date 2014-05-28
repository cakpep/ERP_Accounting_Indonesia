Selamat datang di Aplikasi ERP + Accounting Indonesia

Dipersembahkan sepenuhnya untuk kemajuan aplikasi di tanah air.

Terima kasih untuk anda yang sudah berpartisipasi dalam proyek ini.


Peter J. Kambey
peterjkambey@gmail.com

Cara Penggunaan:
1. Download dan install Yii PHP Framework (www.yiiframework.com/download/)
2. testing folder requirements/ yang sudah ada dalam bawaan Yii. Pastikan semua status dalam keadaan hijau, terutama MYSQL Extension 
3. Download seluruh folder erp_indonesia dan taroh selevel dengan folder framework (bawaan Yii)
4. Import file erp_indonesia.sql.zip ke MySQL Server menggunakan command line, atau yang termudah menggunakan phpmyadmin
5. Setting koneksi dari aplikasi ke mySQL sesuai setingan anda. Conf file ada di /erp_indonesia/protected/config/main.php  liat blocking database ( 'db' )
6. Buka home login aplikasi
7. Input 
username: peter
password: kambey

8. Jika anda tidak menggunakan ZendCache maka atur seting cache di main.php menggunakan standard Yii
....
	'cache'=>array(
			'class'=>'system.caching.CFileCache',
			//'class'=>'CZendDataCache',
	),
...					


Online Demo
http://www.erp-indonesia.biz
username: peter 
password: kambey

----------------------------------

04-09-2012
[ENH] Upgrade ke versi 3 Beta. Tambahan File Browser, Mailbox, RBAC dan Internationalization (Terjemahana belum selesai)


04-08-2012
[ENH] Upgrade ke versi 2 Beta. Accounting pindah ke module, Budgeting+Purchasing module tersendiri. Fitur standard masuk ke non-module


11-05-2012   
[BUG] Perbaikan Closing Process. 
[ENH] Penambahan status Posting di Print List Accounting
[ENH] Perbaikan Header Theme

-----------------------------------
ERP INDONESIA
LIST OF FEATURES

CORE SYSTEM
1. Main DashBoard 
	a. Favourite Admin Widget
	b. Personal Folder Widget
	c. Twitter Stream
	d. RSS Stream
	e. Task To Do
	f. Graphics
2. Company Organization Structure (Unlimited Level)
3. Backup and SQL Statement
4. Company News
5. File Browser
a. Personal Folder 
b. Read Write Public Folder
c. Read Only Public Folder
6. Company Photo Gallery
7. Notification Manager
8. Tabel Parameter
9. SMS Gateway
10. User Management
	a. Matrix Security by available module
	b. User Entity by Organization Structure
	c. Security Module/Controller/Action via RBAC  
	d. Self Service Update Profile (future)
11. Web Service (future)
12. Calendar
	a. Company Calendar
	b. Personal Calendar
13. User Mailbox
14. SiteMap Auto Generator
15. Support Multi Language Interface
16. Theme (future)
17. Bookmark (future)
18. Chat (future)
19. Click to Call /Asterisk IP-PBX (future)

HUMAN RESOURCE 
1. HR Dashboard 
	a. Employee In/Out/Mutation
	b. Employee Probation/Contract Aging
	c. Employee Birthday
	d. Graphics Employee Composition per Company by Age, Sex, Level, Join Date, Education
	e. Other Report
2. Person Module
	b. Career
	c. Education
	d. Non Formal Education
	e. Experience
	f. Family
	g. Other Information
	h. Employee Status
	i. Photo
3. Absence Module (upcoming)
4. Talent and Performance Module
5. Leave Module
6. Recruitment Module (upcoming)
7. Employee Self Service Module (upcoming)

ACCOUNTING
1. Accounting Dashboard
2. Chart of Account
3. Double Entry Journal
4. Cash Bank (Single Entry Journal)
5. General and Inventory Purchasing Request/Order
6. Account Payable
7. Inventory System
8.  Sales Request/Order
9. Account Receivable
10. Cost of Goods
11. Posting to General Ledger
12. Closing Period
13. Monthly Report. Balance Sheet/Profit Lost/Cash Flow
14. Supplier/Customer List
15. Pivot Report (future)

BUDGETING
1. Multi Component Budget Table
	a. By Budget Component/SubComponent
	b. By Department
2. Purchase Order and Report
3. Approval Form and Report
4. Balance info per Component or per Department

ASSET (partial finished)
1. Asset Dashboard 
2. Asset Management
	a. By Multi Level Category
	b. By Location
	c. By Ownership
	d. Photo
3. Supplier List
4. Address Book/Contact

