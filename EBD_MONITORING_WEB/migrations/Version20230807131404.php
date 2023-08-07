<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230807131404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cluster CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE nom_du_ressource_group_package_service_guard nom_du_ressource_group_package_service_guard VARCHAR(250) DEFAULT NULL, CHANGE adresse_ip adresse_ip VARCHAR(250) DEFAULT NULL, CHANGE liste_des_serveurs_concernés liste_des_serveurs_concernés VARCHAR(250) DEFAULT NULL, CHANGE logiciel_cluster logiciel_cluster VARCHAR(250) DEFAULT NULL, CHANGE version version VARCHAR(250) DEFAULT NULL, CHANGE mode mode VARCHAR(250) DEFAULT NULL, CHANGE serveur_actif serveur_actif VARCHAR(250) DEFAULT NULL, CHANGE complements_informations complements_informations VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE log_files CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(250) DEFAULT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) DEFAULT NULL, CHANGE logfile logfile VARCHAR(250) DEFAULT NULL, CHANGE localisation localisation VARCHAR(250) DEFAULT NULL, CHANGE description description VARCHAR(250) DEFAULT NULL, CHANGE format_logfile format_logfile VARCHAR(250) DEFAULT NULL, CHANGE separateur separateur VARCHAR(250) DEFAULT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) DEFAULT NULL, CHANGE monitored_by monitored_by VARCHAR(250) DEFAULT NULL, CHANGE fourni_en_annexe fourni_en_annexe VARCHAR(250) DEFAULT NULL, CHANGE ref_service ref_service VARCHAR(250) DEFAULT NULL, CHANGE nom_template nom_template VARCHAR(250) DEFAULT NULL, CHANGE log_conditions log_conditions VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE log_files_patterns CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE signification signification VARCHAR(250) DEFAULT NULL, CHANGE identification identification VARCHAR(250) DEFAULT NULL, CHANGE criticite criticite VARCHAR(250) DEFAULT NULL, CHANGE message_alarme message_alarme VARCHAR(250) DEFAULT NULL, CHANGE instructions instructions VARCHAR(250) DEFAULT NULL, CHANGE perform_action perform_action VARCHAR(250) DEFAULT NULL, CHANGE acquittement acquittement VARCHAR(250) DEFAULT NULL, CHANGE complements_informations complements_informations VARCHAR(250) DEFAULT NULL, CHANGE ref_service ref_service VARCHAR(250) DEFAULT NULL, CHANGE objet objet VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE process CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(250) DEFAULT NULL, CHANGE process process VARCHAR(250) DEFAULT NULL, CHANGE criticite criticite VARCHAR(250) DEFAULT NULL, CHANGE message_alarme message_alarme VARCHAR(250) DEFAULT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) DEFAULT NULL, CHANGE objet objet VARCHAR(250) DEFAULT NULL, CHANGE nom_template nom_template VARCHAR(250) DEFAULT NULL, CHANGE monitored_by monitored_by VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE requetessql CHANGE ref ref VARCHAR(500) DEFAULT NULL, CHANGE etat etat VARCHAR(500) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(500) DEFAULT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(500) DEFAULT NULL, CHANGE requete_sql requete_sql VARCHAR(500) DEFAULT NULL, CHANGE username_db_name username_db_name VARCHAR(500) DEFAULT NULL, CHANGE resultat_attendu_de_la_requete resultat_attendu_de_la_requete VARCHAR(500) DEFAULT NULL, CHANGE perform_action perform_action VARCHAR(500) DEFAULT NULL, CHANGE criticite criticite VARCHAR(500) DEFAULT NULL, CHANGE message_alarme message_alarme VARCHAR(500) DEFAULT NULL, CHANGE instructions instructions VARCHAR(500) DEFAULT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(500) DEFAULT NULL, CHANGE ref_service ref_service VARCHAR(500) DEFAULT NULL, CHANGE objet objet VARCHAR(500) DEFAULT NULL, CHANGE monitored_by monitored_by VARCHAR(500) DEFAULT NULL, CHANGE nom_template nom_template VARCHAR(500) DEFAULT NULL, CHANGE support support VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE scripts CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(250) DEFAULT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) DEFAULT NULL, CHANGE script script VARCHAR(250) DEFAULT NULL, CHANGE code_erreur code_erreur VARCHAR(250) DEFAULT NULL, CHANGE criticite criticite VARCHAR(250) DEFAULT NULL, CHANGE description description VARCHAR(250) DEFAULT NULL, CHANGE instructions instructions VARCHAR(250) DEFAULT NULL, CHANGE monitored_by monitored_by VARCHAR(250) DEFAULT NULL, CHANGE ref_service ref_service VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE serveurs CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE platforme platforme VARCHAR(250) DEFAULT NULL, CHANGE hostname hostname VARCHAR(250) DEFAULT NULL, CHANGE fqdn fqdn VARCHAR(250) DEFAULT NULL, CHANGE type type VARCHAR(250) DEFAULT NULL, CHANGE modele modele VARCHAR(250) DEFAULT NULL, CHANGE os os VARCHAR(250) DEFAULT NULL, CHANGE ver_tech_firmware ver_tech_firmware VARCHAR(250) DEFAULT NULL, CHANGE cluster cluster VARCHAR(250) DEFAULT NULL, CHANGE ip_source ip_source VARCHAR(250) DEFAULT NULL, CHANGE description description VARCHAR(250) DEFAULT NULL, CHANGE socle_standard_omu socle_standard_omu VARCHAR(250) DEFAULT NULL, CHANGE complements_informations complements_informations VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE traps_snmp CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(250) DEFAULT NULL, CHANGE signification signification VARCHAR(250) DEFAULT NULL, CHANGE version_snmp version_snmp VARCHAR(250) DEFAULT NULL, CHANGE oid oid VARCHAR(250) DEFAULT NULL, CHANGE specific_trap specific_trap VARCHAR(250) DEFAULT NULL, CHANGE variable_binding variable_binding VARCHAR(250) DEFAULT NULL, CHANGE criticite criticite VARCHAR(250) DEFAULT NULL, CHANGE message_alarme message_alarme VARCHAR(250) DEFAULT NULL, CHANGE instructions instructions VARCHAR(250) DEFAULT NULL, CHANGE acquittement acquittement VARCHAR(250) DEFAULT NULL, CHANGE mib_associe mib_associe VARCHAR(250) DEFAULT NULL, CHANGE objet objet VARCHAR(250) DEFAULT NULL, CHANGE compelement_information compelement_information VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE url CHANGE ref ref VARCHAR(250) DEFAULT NULL, CHANGE etat etat VARCHAR(250) DEFAULT NULL, CHANGE ref_composant ref_composant VARCHAR(250) DEFAULT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) DEFAULT NULL, CHANGE url url VARCHAR(250) DEFAULT NULL, CHANGE perform_action perform_action VARCHAR(250) DEFAULT NULL, CHANGE criticite criticite VARCHAR(250) DEFAULT NULL, CHANGE message_alarme message_alarme VARCHAR(250) DEFAULT NULL, CHANGE instructions instructions VARCHAR(250) DEFAULT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) DEFAULT NULL, CHANGE ref_service ref_service VARCHAR(250) DEFAULT NULL, CHANGE objet objet VARCHAR(250) DEFAULT NULL, CHANGE monitored_by monitored_by VARCHAR(250) DEFAULT NULL, CHANGE nom_template nom_template VARCHAR(250) DEFAULT NULL, CHANGE support support VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cluster CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE nom_du_ressource_group_package_service_guard nom_du_ressource_group_package_service_guard VARCHAR(250) NOT NULL, CHANGE adresse_ip adresse_ip VARCHAR(250) NOT NULL, CHANGE liste_des_serveurs_concernés liste_des_serveurs_concernés VARCHAR(250) NOT NULL, CHANGE logiciel_cluster logiciel_cluster VARCHAR(250) NOT NULL, CHANGE version version VARCHAR(250) NOT NULL, CHANGE mode mode VARCHAR(250) NOT NULL, CHANGE serveur_actif serveur_actif VARCHAR(250) NOT NULL, CHANGE complements_informations complements_informations VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE log_files CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(250) NOT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) NOT NULL, CHANGE logfile logfile VARCHAR(250) NOT NULL, CHANGE localisation localisation VARCHAR(250) NOT NULL, CHANGE description description VARCHAR(250) NOT NULL, CHANGE format_logfile format_logfile VARCHAR(250) NOT NULL, CHANGE separateur separateur VARCHAR(250) NOT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) NOT NULL, CHANGE monitored_by monitored_by VARCHAR(250) NOT NULL, CHANGE fourni_en_annexe fourni_en_annexe VARCHAR(250) NOT NULL, CHANGE ref_service ref_service VARCHAR(250) NOT NULL, CHANGE nom_template nom_template VARCHAR(250) NOT NULL, CHANGE log_conditions log_conditions VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE log_files_patterns CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE signification signification VARCHAR(250) NOT NULL, CHANGE identification identification VARCHAR(250) NOT NULL, CHANGE criticite criticite VARCHAR(250) NOT NULL, CHANGE message_alarme message_alarme VARCHAR(250) NOT NULL, CHANGE instructions instructions VARCHAR(250) NOT NULL, CHANGE perform_action perform_action VARCHAR(250) NOT NULL, CHANGE acquittement acquittement VARCHAR(250) NOT NULL, CHANGE complements_informations complements_informations VARCHAR(250) NOT NULL, CHANGE ref_service ref_service VARCHAR(250) NOT NULL, CHANGE objet objet VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE process CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(250) NOT NULL, CHANGE process process VARCHAR(250) NOT NULL, CHANGE criticite criticite VARCHAR(250) NOT NULL, CHANGE message_alarme message_alarme VARCHAR(250) NOT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) NOT NULL, CHANGE objet objet VARCHAR(250) NOT NULL, CHANGE nom_template nom_template VARCHAR(250) NOT NULL, CHANGE monitored_by monitored_by VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE requetessql CHANGE ref ref VARCHAR(500) NOT NULL, CHANGE etat etat VARCHAR(500) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(500) NOT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(500) NOT NULL, CHANGE requete_sql requete_sql VARCHAR(500) NOT NULL, CHANGE username_db_name username_db_name VARCHAR(500) NOT NULL, CHANGE resultat_attendu_de_la_requete resultat_attendu_de_la_requete VARCHAR(500) NOT NULL, CHANGE perform_action perform_action VARCHAR(500) NOT NULL, CHANGE criticite criticite VARCHAR(500) NOT NULL, CHANGE message_alarme message_alarme VARCHAR(500) NOT NULL, CHANGE instructions instructions VARCHAR(500) NOT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(500) NOT NULL, CHANGE ref_service ref_service VARCHAR(500) NOT NULL, CHANGE objet objet VARCHAR(500) NOT NULL, CHANGE monitored_by monitored_by VARCHAR(500) NOT NULL, CHANGE nom_template nom_template VARCHAR(500) NOT NULL, CHANGE support support VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE scripts CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(250) NOT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) NOT NULL, CHANGE script script VARCHAR(250) NOT NULL, CHANGE code_erreur code_erreur VARCHAR(250) NOT NULL, CHANGE criticite criticite VARCHAR(250) NOT NULL, CHANGE description description VARCHAR(250) NOT NULL, CHANGE instructions instructions VARCHAR(250) NOT NULL, CHANGE monitored_by monitored_by VARCHAR(250) NOT NULL, CHANGE ref_service ref_service VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE serveurs CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE platforme platforme VARCHAR(250) NOT NULL, CHANGE hostname hostname VARCHAR(250) NOT NULL, CHANGE fqdn fqdn VARCHAR(250) NOT NULL, CHANGE type type VARCHAR(250) NOT NULL, CHANGE modele modele VARCHAR(250) NOT NULL, CHANGE os os VARCHAR(250) NOT NULL, CHANGE ver_tech_firmware ver_tech_firmware VARCHAR(250) NOT NULL, CHANGE cluster cluster VARCHAR(250) NOT NULL, CHANGE ip_source ip_source VARCHAR(250) NOT NULL, CHANGE description description VARCHAR(250) NOT NULL, CHANGE socle_standard_omu socle_standard_omu VARCHAR(250) NOT NULL, CHANGE complements_informations complements_informations VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE traps_snmp CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(250) NOT NULL, CHANGE signification signification VARCHAR(250) NOT NULL, CHANGE version_snmp version_snmp VARCHAR(250) NOT NULL, CHANGE oid oid VARCHAR(250) NOT NULL, CHANGE specific_trap specific_trap VARCHAR(250) NOT NULL, CHANGE variable_binding variable_binding VARCHAR(250) NOT NULL, CHANGE criticite criticite VARCHAR(250) NOT NULL, CHANGE message_alarme message_alarme VARCHAR(250) NOT NULL, CHANGE instructions instructions VARCHAR(250) NOT NULL, CHANGE acquittement acquittement VARCHAR(250) NOT NULL, CHANGE mib_associe mib_associe VARCHAR(250) NOT NULL, CHANGE objet objet VARCHAR(250) NOT NULL, CHANGE compelement_information compelement_information VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE url CHANGE ref ref VARCHAR(250) NOT NULL, CHANGE etat etat VARCHAR(250) NOT NULL, CHANGE ref_composant ref_composant VARCHAR(250) NOT NULL, CHANGE rg_sg_si_cluster rg_sg_si_cluster VARCHAR(250) NOT NULL, CHANGE url url VARCHAR(250) NOT NULL, CHANGE perform_action perform_action VARCHAR(250) NOT NULL, CHANGE criticite criticite VARCHAR(250) NOT NULL, CHANGE message_alarme message_alarme VARCHAR(250) NOT NULL, CHANGE instructions instructions VARCHAR(250) NOT NULL, CHANGE intervalle_de_polling intervalle_de_polling VARCHAR(250) NOT NULL, CHANGE ref_service ref_service VARCHAR(250) NOT NULL, CHANGE objet objet VARCHAR(250) NOT NULL, CHANGE monitored_by monitored_by VARCHAR(250) NOT NULL, CHANGE nom_template nom_template VARCHAR(250) NOT NULL, CHANGE support support VARCHAR(250) NOT NULL');
    }
}
