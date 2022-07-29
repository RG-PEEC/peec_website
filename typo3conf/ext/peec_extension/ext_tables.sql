#
# Table structure for table 'tx_peecextension_domain_model_employee'
#
CREATE TABLE tx_peecextension_domain_model_employee (

	firstname varchar(255) DEFAULT '' NOT NULL,
	lastname varchar(255) DEFAULT '' NOT NULL,
	academictitle varchar(255) DEFAULT '' NOT NULL,
	postacademictitle varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	phonenumber varchar(255) DEFAULT '' NOT NULL,
	picture int(11) unsigned NOT NULL default '0',
	position int(11) unsigned DEFAULT '0',
	education int(11) unsigned DEFAULT '0' NOT NULL,
	career int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_project'
#
CREATE TABLE tx_peecextension_domain_model_project (

	title varchar(255) DEFAULT '' NOT NULL,
	startdate int(11) DEFAULT '0' NOT NULL,
	enddate int(11) DEFAULT '0' NOT NULL,
	description text,
	color_code varchar(255) DEFAULT '' NOT NULL,
	active smallint(5) unsigned DEFAULT '0' NOT NULL,
	teaserimage int(11) unsigned NOT NULL default '0',
	media int(11) unsigned DEFAULT '0' NOT NULL,
	member int(11) unsigned DEFAULT '0' NOT NULL,
	leader int(11) unsigned DEFAULT '0',
	researchpartner int(11) unsigned DEFAULT '0' NOT NULL,
	companypartner int(11) unsigned DEFAULT '0' NOT NULL,
	fundingpartner int(11) unsigned DEFAULT '0' NOT NULL,
	category int(11) unsigned DEFAULT '0' NOT NULL,
	publication int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_education'
#
CREATE TABLE tx_peecextension_domain_model_education (

	employee int(11) unsigned DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	subject varchar(255) DEFAULT '' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL,
	startdate date DEFAULT NULL,
	enddate date DEFAULT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_career'
#
CREATE TABLE tx_peecextension_domain_model_career (

	employee int(11) unsigned DEFAULT '0' NOT NULL,

	company varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	position varchar(255) DEFAULT '' NOT NULL,
	jobdescription text,
	startdate date DEFAULT NULL,
	enddate date DEFAULT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_publication'
#
CREATE TABLE tx_peecextension_domain_model_publication (

	title varchar(255) DEFAULT '' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	pdf int(11) unsigned NOT NULL default '0',
	referencelink varchar(255) DEFAULT '' NOT NULL,
	doi varchar(255) DEFAULT '' NOT NULL,
	journal varchar(255) DEFAULT '' NOT NULL,
	year int(11) DEFAULT '0' NOT NULL,
	volume varchar(255) DEFAULT '' NOT NULL,
	number varchar(255) DEFAULT '' NOT NULL,
	month varchar(255) DEFAULT '' NOT NULL,
	note varchar(255) DEFAULT '' NOT NULL,
	publisher varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	edition varchar(255) DEFAULT '' NOT NULL,
	isbn varchar(255) DEFAULT '' NOT NULL,
	booktitle varchar(255) DEFAULT '' NOT NULL,
	organization varchar(255) DEFAULT '' NOT NULL,
	series varchar(255) DEFAULT '' NOT NULL,
	chapter varchar(255) DEFAULT '' NOT NULL,
	school varchar(255) DEFAULT '' NOT NULL,
	howpublished varchar(255) DEFAULT '' NOT NULL,
	editor varchar(255) DEFAULT '' NOT NULL,
	startpage int(11) DEFAULT '0' NOT NULL,
	endingpage int(11) DEFAULT '0' NOT NULL,
	citationlable varchar(255) DEFAULT '' NOT NULL,
	author int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_fundingpartner'
#
CREATE TABLE tx_peecextension_domain_model_fundingpartner (

	name varchar(255) DEFAULT '' NOT NULL,
	abbreviation varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0'

);

#
# Table structure for table 'tx_peecextension_domain_model_companypartner'
#
CREATE TABLE tx_peecextension_domain_model_companypartner (

	name varchar(255) DEFAULT '' NOT NULL,
	abbreviation varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	display smallint(5) unsigned DEFAULT '0' NOT NULL,
	participant int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_position'
#
CREATE TABLE tx_peecextension_domain_model_position (

	name varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_category'
#
CREATE TABLE tx_peecextension_domain_model_category (

	name varchar(255) DEFAULT '' NOT NULL,
	abbreviation varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_partner'
#
CREATE TABLE tx_peecextension_domain_model_partner (

	researchpartner text NOT NULL,
	companypartner text NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_participant'
#
CREATE TABLE tx_peecextension_domain_model_participant (

	companypartner int(11) unsigned DEFAULT '0' NOT NULL,
	researchpartner int(11) unsigned DEFAULT '0' NOT NULL,

	firstname varchar(255) DEFAULT '' NOT NULL,
	lastname varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_peecextension_domain_model_researchpartner'
#
CREATE TABLE tx_peecextension_domain_model_researchpartner (

	name varchar(255) DEFAULT '' NOT NULL,
	abbreviation varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	display smallint(5) unsigned DEFAULT '0' NOT NULL,
	participant int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_peecextension_project_employee_mm'
#
CREATE TABLE tx_peecextension_project_employee_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_project_researchpartner_mm'
#
CREATE TABLE tx_peecextension_project_researchpartner_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_project_companypartner_mm'
#
CREATE TABLE tx_peecextension_project_companypartner_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_project_fundingpartner_mm'
#
CREATE TABLE tx_peecextension_project_fundingpartner_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_project_category_mm'
#
CREATE TABLE tx_peecextension_project_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_publication_employee_mm'
#
CREATE TABLE tx_peecextension_publication_employee_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_peecextension_domain_model_category'
#
CREATE TABLE tx_peecextension_domain_model_category (
	categories int(11) unsigned DEFAULT '0' NOT NULL
);


#
# Table structure for table 'tx_peecextension_project_publication_mm'
#
CREATE TABLE tx_peecextension_project_publication_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
