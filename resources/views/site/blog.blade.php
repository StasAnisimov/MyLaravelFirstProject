.htaccess � ����� � ���������
� �����
 	
	<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

������ � ���������� 
		use Illuminate\Support\Facades\Schema;
		appservice provider 
			public function boot 	
			{
			Schema::defaultStringLength(191);				
			}