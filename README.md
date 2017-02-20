# Codeigniter Standart Project
Codeigniterda geliştirilen standart bir proje kalıbıdır. 
<br>
### Özelleştirilen sayfalar :
<ul>
	<li>Models</li>
	<li>Helpers</li>
	<li>Admin Panel</li>
	<li>Htaccess</li>
	<li>Seo bağlantısı</li>
	<li>Robots.txt</li>
  <li>Uploads</li>
  <li>Autoload</li>
  <li>Database Session</li>
  <li>Routes</li>
  <li>Örnek DB Bağlantıları</li>
</ul>

### Create Session Database Table : 

<pre><code>
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
);
</pre></code>

### Create Users Database Table : 

<pre><code>
CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `tarih` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `durum` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
</pre></code>

### Create Seo Database Table : 

<pre><code>
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `tarih` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
</pre></code>

### .htaccess enable

<pre><code>
root folder htaccess.txt change or .htaccess
.htaccess folder => siteadi.com change
</pre></code>
