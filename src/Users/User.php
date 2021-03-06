<?php

/*
 * This file is part of the Alma API library
 *
 * (c) California State University <library@calstate.edu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alma\Users;

use Alma;
use Alma\Utils\Record;

/**
 * User Object.
 *
 * @author David Walker <dwalker@calstate.edu>
 */
class User extends Record
{
    /**
     * The type of user record.
     * 
     * Possible codes are listed in 'AddNewUserOptions' code table: Contact,
     * Staff, Public. Mandatory In User API. On SIS load, this field is determined
     * according to the SIS profile.
     *
     * @return Alma\Utils\Value
     */
    public function getRecordType()
    {
        return $this->getValueObject('record_type');
    }

    /**
     * The type of user record.
     * 
     * Possible codes are listed in 'AddNewUserOptions' code table: Contact,
     * Staff, Public. Mandatory In User API. On SIS load, this field is determined
     * according to the SIS profile.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setRecordType($value, $desc = "")
    {
        $this->setValueObject('record_type', $value, $desc);
    }

    /**
     * The primary identifier of the user.
     * 
     * Mandatory In User API. For new users in SIS load , if not supplied, the
     * system will generate a default based on the first and the last name. Note
     * that the primary_id is case insensitive.
     *
     * @return string
     */
    public function getPrimaryId()
    {
        return (string) $this->json()->primary_id;
    }

    /**
     * The primary identifier of the user.
     * 
     * Mandatory In User API. For new users in SIS load , if not supplied, the
     * system will generate a default based on the first and the last name. Note
     * that the primary_id is case insensitive.
     *
     * @param string $primary_id
     */
    public function setPrimaryId($primary_id)
    {
        $this->json()->primary_id = $primary_id;
    }

    /**
     * The user's first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return (string) $this->json()->first_name;
    }

    /**
     * The user's first name.
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->json()->first_name = $first_name;
    }

    /**
     * The user's middle name.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return (string) $this->json()->middle_name;
    }

    /**
     * The user's middle name.
     *
     * @param string $middle_name
     */
    public function setMiddleName($middle_name)
    {
        $this->json()->middle_name = $middle_name;
    }

    /**
     * The user's last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return (string) $this->json()->last_name;
    }

    /**
     * The user's last name.
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->json()->last_name = $last_name;
    }

    /**
     * The user's full name. Output parameter.
     *
     * @return string
     */
    public function getFullName()
    {
        return (string) $this->json()->full_name;
    }

    /**
     * A four-digit number which serves as a password for the user to log on to
     * the selfcheck machine (SIP2).
     * 
     * On SIS synch this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record). For external users in PUT action:
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record), unless 'override' parameter is sent with the
     * field's name. See blog for more details.
     *
     * @param string $pin_number
     */
    public function setPinNumber($pin_number)
    {
        $this->json()->pin_number = $pin_number;
    }

    /**
     * The user's title
     * 
     * Possible codes are listed in the 'UserTitles' code table. On SIS synch this
     * field will not be replaced if it was updated manually (or if empty in the
     * incoming user record). For external users in PUT action: this field will
     * not be replaced if it was updated manually (or if empty in the incoming
     * user record), unless 'override' parameter is sent with the field's name.
     * See blog for more details.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setUserTitle($value, $desc = "")
    {
        $this->setValueObject('user_title', $value, $desc);
    }

    /**
     * The types of jobs the user performs in the library, such as Cataloger,
     * Circulation Desk Operator, and so forth.
     * 
     * Possible values are listed in 'Job Titles' code table. On SIS synch this
     * field will not be replaced if it was updated manually (or if empty in the
     * incoming user record). For external users in PUT action: this field will
     * not be replaced if it was updated manually (or if empty in the incoming
     * user record), unless 'override' parameter is sent with the field's name.
     * See blog for more details.
     *
     * @return Alma\Utils\Value
     */
    public function getJobCategory()
    {
        return $this->getValueObject('job_category');
    }

    /**
     * The types of jobs the user performs in the library, such as Cataloger,
     * Circulation Desk Operator, and so forth.
     * 
     * Possible values are listed in 'Job Titles' code table. On SIS synch this
     * field will not be replaced if it was updated manually (or if empty in the
     * incoming user record). For external users in PUT action: this field will
     * not be replaced if it was updated manually (or if empty in the incoming
     * user record), unless 'override' parameter is sent with the field's name.
     * See blog for more details.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setJobCategory($value, $desc = "")
    {
        $this->setValueObject('job_category', $value, $desc);
    }

    /**
     * General description of the user's job.
     *
     * @return string
     */
    public function getJobDescription()
    {
        return (string) $this->json()->job_description;
    }

    /**
     * General description of the user's job.
     *
     * @param string $job_description
     */
    public function setJobDescription($job_description)
    {
        $this->json()->job_description = $job_description;
    }

    /**
     * The user's gender.
     * 
     * Possible codes are listed in the 'Genders' code table.
     *
     * @return Alma\Utils\Value
     */
    public function getGender()
    {
        return $this->getValueObject('gender');
    }

    /**
     * The user's gender.
     * 
     * Possible codes are listed in the 'Genders' code table.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setGender($value, $desc = "")
    {
        $this->setValueObject('gender', $value, $desc);
    }

    /**
     * The group within the institution to which the user belongs.
     * 
     * Possible codes are listed in 'User Groups' code table. Rules for user group
     * usage are define in 'UserRecordTypeUserGroup' mapping table. On SIS synch
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record). For external users in PUT action: this field
     * will not be replaced if it was updated manually (or if empty in the
     * incoming user record), unless 'override' parameter is sent with the field's
     * name. See blog for more details.
     *
     * @return Alma\Utils\Value
     */
    public function getUserGroup()
    {
        return $this->getValueObject('user_group');
    }

    /**
     * The group within the institution to which the user belongs.
     * 
     * Possible codes are listed in 'User Groups' code table. Rules for user group
     * usage are define in 'UserRecordTypeUserGroup' mapping table. On SIS synch
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record). For external users in PUT action: this field
     * will not be replaced if it was updated manually (or if empty in the
     * incoming user record), unless 'override' parameter is sent with the field's
     * name. See blog for more details.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setUserGroup($value, $desc = "")
    {
        $this->setValueObject('user_group', $value, $desc);
    }

    /**
     * The code of the campus related to the user.
     * 
     * Possible codes are listed in the "Campus List" of the general configuration
     * menu. On SIS synch this field will not be replaced if it was updated
     * manually (or if empty in the incoming user record). For external users in
     * PUT action: this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record), unless 'override' parameter is sent
     * with the field's name. See blog for more details.
     *
     * @return Alma\Utils\Value
     */
    public function getCampusCode()
    {
        return $this->getValueObject('campus_code');
    }

    /**
     * The code of the campus related to the user.
     * 
     * Possible codes are listed in the "Campus List" of the general configuration
     * menu. On SIS synch this field will not be replaced if it was updated
     * manually (or if empty in the incoming user record). For external users in
     * PUT action: this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record), unless 'override' parameter is sent
     * with the field's name. See blog for more details.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setCampusCode($value, $desc = "")
    {
        $this->setValueObject('campus_code', $value, $desc);
    }

    /**
     * The web site address related to the user.
     *
     * @return string
     */
    public function getWebSiteUrl()
    {
        return (string) $this->json()->web_site_url;
    }

    /**
     * The web site address related to the user.
     *
     * @param string $web_site_url
     */
    public function setWebSiteUrl($web_site_url)
    {
        $this->json()->web_site_url = $web_site_url;
    }

    /**
     * The cataloger level of the user.
     * 
     * The cataloger level serves to control which catalogers can edit and update
     * records which have been edited and updated by other users.
     *
     * @return Alma\Utils\Value
     */
    public function getCatalogerLevel()
    {
        return $this->getValueObject('cataloger_level');
    }

    /**
     * The cataloger level of the user.
     * 
     * The cataloger level serves to control which catalogers can edit and update
     * records which have been edited and updated by other users.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setCatalogerLevel($value, $desc = "")
    {
        $this->setValueObject('cataloger_level', $value, $desc);
    }

    /**
     * The user's preferred language.
     * 
     * Possible codes are listed in 'User Preferred Language' code table. Default:
     * en. On SIS synch this field will not be replaced if it was updated manually
     * (or if empty in the incoming user record). For external users in PUT
     * action: this field will not be replaced if it was updated manually (or if
     * empty in the incoming user record), unless 'override' parameter is sent
     * with the field's name. See blog for more details.
     *
     * @return Alma\Utils\Value
     */
    public function getPreferredLanguage()
    {
        return $this->getValueObject('preferred_language');
    }

    /**
     * The user's preferred language.
     * 
     * Possible codes are listed in 'User Preferred Language' code table. Default:
     * en. On SIS synch this field will not be replaced if it was updated manually
     * (or if empty in the incoming user record). For external users in PUT
     * action: this field will not be replaced if it was updated manually (or if
     * empty in the incoming user record), unless 'override' parameter is sent
     * with the field's name. See blog for more details.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setPreferredLanguage($value, $desc = "")
    {
        $this->setValueObject('preferred_language', $value, $desc);
    }

    /**
     * The user's birth date.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->stringToDate((string) $this->json()->birth_date);
    }

    /**
     * The user's birth date.
     *
     * @param \DateTime|string $birth_date
     */
    public function setBirthDate($birth_date)
    {
        $this->json()->birth_date = $this->dateToString($birth_date);
    }

    /**
     * The estimated date when the user is expected to leave the institution.
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->stringToDate((string) $this->json()->expiry_date);
    }

    /**
     * The estimated date when the user is expected to leave the institution.
     *
     * @param \DateTime|string $expiry_date
     */
    public function setExpiryDate($expiry_date)
    {
        $this->json()->expiry_date = $this->dateToString($expiry_date);
    }

    /**
     * The date on which the user is purged from the system.
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->stringToDate((string) $this->json()->purge_date);
    }

    /**
     * The date on which the user is purged from the system.
     *
     * @param \DateTime|string $purge_date
     */
    public function setPurgeDate($purge_date)
    {
        $this->json()->purge_date = $this->dateToString($purge_date);
    }

    /**
     * The user's account type.
     * 
     * Possible code are listed in 'User Types - User' code table. This field is
     * mandatory in the User API. In the PUT action, it is possible to update
     * Internal user to be External. It is NOT possible to update External user to
     * be Internal. On SIS load, users are always created as "External".
     *
     * @return Alma\Utils\Value
     */
    public function getAccountType()
    {
        return $this->getValueObject('account_type');
    }

    /**
     * The user's account type.
     * 
     * Possible code are listed in 'User Types - User' code table. This field is
     * mandatory in the User API. In the PUT action, it is possible to update
     * Internal user to be External. It is NOT possible to update External user to
     * be Internal. On SIS load, users are always created as "External".
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setAccountType($value, $desc = "")
    {
        $this->setValueObject('account_type', $value, $desc);
    }

    /**
     * The external system from which the user was loaded into Alma. Relevant only
     * for External users.
     * 
     * This field is mandatory during the POST and PUT actions for external users,
     * and must match a valid SIS external system profile. On SIS load, it is
     * filled with the SIS profile code.
     *
     * @return string
     */
    public function getExternalId()
    {
        return (string) $this->json()->external_id;
    }

    /**
     * The external system from which the user was loaded into Alma. Relevant only
     * for External users.
     * 
     * This field is mandatory during the POST and PUT actions for external users,
     * and must match a valid SIS external system profile. On SIS load, it is
     * filled with the SIS profile code.
     *
     * @param string $external_id
     */
    public function setExternalId($external_id)
    {
        $this->json()->external_id = $external_id;
    }

    /**
     * user's password. Relevant for internal users only.
     * 
     * Due to security issues, it is returned empty in the GET action. Note that
     * in the PUT action password can be updated, but if left empty - the existing
     * password will be kept.
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->json()->password = $password;
    }

    /**
     * Set this field to 'TRUE' to prompt user to change the password on next log
     * in. Relevant for internal users only.
     *
     * @param string $force_password_change
     */
    public function setForcePasswordChange($force_password_change)
    {
        $this->json()->force_password_change = $force_password_change;
    }

    /**
     * Status of user account.
     * 
     * Possible codes are listed in 'Content Structure Status' code table. Default
     * is Active.
     *
     * @return Alma\Utils\Value
     */
    public function getStatus()
    {
        return $this->getValueObject('status');
    }

    /**
     * Status of user account.
     * 
     * Possible codes are listed in 'Content Structure Status' code table. Default
     * is Active.
     *
     * @param string $value  value 
     * @param string $desc   [optional] description
     */
    public function setStatus($value, $desc = "")
    {
        $this->setValueObject('status', $value, $desc);
    }

    /**
     * Number of requests for user.
     * 
     * Output parameter.
     *
     * @return int
     */
    public function getRequests()
    {
        return (int) $this->json()->requests;
    }

    /**
     * Number of loans for user.
     * 
     * Output parameter.
     *
     * @return int
     */
    public function getLoans()
    {
        return (int) $this->json()->loans;
    }

    /**
     * Fines/fees active balance for user
     * 
     * Output parameter.
     *
     * @return float
     */
    public function getFees()
    {
        return (float) $this->json()->fees;
    }

    /**
     * List of the user's contacts information.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * contacts. Internal contacts will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @return ContactInfo
     */
    public function getContactInfo()
    {
        return new ContactInfo($this->json()->contact_info);
    }

    /**
     * List of the user's contacts information.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * contacts. Internal contacts will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @param ContactInfo $contact_info
     */
    public function setContactInfo($contact_info)
    {
        $this->json()->contact_info = $contact_info->json();
    }

    /**
     * List of the user's additional identifiers.
     * 
     * Note that additional identifiers are case sensitive. SIS: In case of new
     * user, these segments will be marked as "external". In case of
     * synchronization, this list will replace the existing external identifiers.
     * Internal identifiers will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @return UserIdentifier[]
     */
    public function getUserIdentifiers()
    {
        $final = array();

        foreach ((array) $this->json()->user_identifier as $user_identifier) {
            $final[] = new UserIdentifier($user_identifier);
        }

        return $final;
    }

    /**
     * List of the user's additional identifiers.
     * 
     * Note that additional identifiers are case sensitive. SIS: In case of new
     * user, these segments will be marked as "external". In case of
     * synchronization, this list will replace the existing external identifiers.
     * Internal identifiers will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @param UserIdentifier[] $user_identifiers
     */
    public function setUserIdentifiers(array $user_identifiers)
    {
        $this->json()->user_identifier = array();

        foreach ($user_identifiers as $user_identifier) {
            $this->json()->user_identifier[] = $user_identifier->json();
        } 
    }

    /**
     * List of the user's roles.
     * 
     * SIS: roles are NOT part of the SIS load. POST action: If list of roles is
     * supplied- these will be the roles. If list of roles was not supplied in the
     * POST action, the user will be created with roles according to the role
     * assignment rules (General > User Management Configuration > Configuration
     * Menu > Roles and Registration > Role Assignment Rules). PUT action: If list
     * of roles is supplied- it will replace the existing roles. If list of roles
     * was not supplied in the PUT action, the existing roles will be kept (note
     * that the roles behavior is different than the other segments: all user
     * segments are deleted if the incoming list is empty. Only roles are kept in
     * such case). Note: For the "Digital Inventory Operator" role at least one
     * metadata-type should be added as a role-parameter.
     *
     * @return UserRole[]
     */
    public function getUserRoles()
    {
        $final = array();

        foreach ((array) $this->json()->user_role as $user_role) {
            $final[] = new UserRole($user_role);
        }

        return $final;
    }

    /**
     * List of the user's roles.
     * 
     * SIS: roles are NOT part of the SIS load. POST action: If list of roles is
     * supplied- these will be the roles. If list of roles was not supplied in the
     * POST action, the user will be created with roles according to the role
     * assignment rules (General > User Management Configuration > Configuration
     * Menu > Roles and Registration > Role Assignment Rules). PUT action: If list
     * of roles is supplied- it will replace the existing roles. If list of roles
     * was not supplied in the PUT action, the existing roles will be kept (note
     * that the roles behavior is different than the other segments: all user
     * segments are deleted if the incoming list is empty. Only roles are kept in
     * such case). Note: For the "Digital Inventory Operator" role at least one
     * metadata-type should be added as a role-parameter.
     *
     * @param UserRole[] $user_roles
     */
    public function setUserRoles(array $user_roles)
    {
        $this->json()->user_role = array();

        foreach ($user_roles as $user_role) {
            $this->json()->user_role[] = $user_role->json();
        } 
    }

    /**
     * List of user's blocks.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * blocks. Internal blocks will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @return UserBlock[]
     */
    public function getUserBlocks()
    {
        $final = array();

        foreach ((array) $this->json()->user_block as $user_block) {
            $final[] = new UserBlock($user_block);
        }

        return $final;
    }

    /**
     * List of user's blocks.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * blocks. Internal blocks will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @param UserBlock[] $user_blocks
     */
    public function setUserBlocks(array $user_blocks)
    {
        $this->json()->user_block = array();

        foreach ($user_blocks as $user_block) {
            $this->json()->user_block[] = $user_block->json();
        } 
    }

    /**
     * List of the user's related notes.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * notes. Internal notes will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @return UserNote[]
     */
    public function getUserNotes()
    {
        $final = array();

        foreach ((array) $this->json()->user_note as $user_note) {
            $final[] = new UserNote($user_note);
        }

        return $final;
    }

    /**
     * List of the user's related notes.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * notes. Internal notes will be kept. POST action: The segments will be
     * created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @param UserNote[] $user_notes
     */
    public function setUserNotes(array $user_notes)
    {
        $this->json()->user_note = array();

        foreach ($user_notes as $user_note) {
            $this->json()->user_note[] = $user_note->json();
        } 
    }

    /**
     * List of user's statistics.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * statistics. Internal statistics will be kept. POST action: The segments
     * will be created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @return UserStatistic[]
     */
    public function getUserStatistics()
    {
        $final = array();

        foreach ((array) $this->json()->user_statistic as $user_statistic) {
            $final[] = new UserStatistic($user_statistic);
        }

        return $final;
    }

    /**
     * List of user's statistics.
     * 
     * SIS: In case of new user, these segments will be marked as "external". In
     * case of synchronization, this list will replace the existing external
     * statistics. Internal statistics will be kept. POST action: The segments
     * will be created as external or as internal according to the "segment_type"
     * attribute. PUT action: Incoming internal segments (based on the
     * "segment_type" attribute) will replace the existing internal segments.
     * Incoming external segments (based on the "segment_type" attribute) will
     * replace the existing external segments. If the incoming list is empty,
     * existing segments will be deleted.
     *
     * @param UserStatistic[] $user_statistics
     */
    public function setUserStatistics(array $user_statistics)
    {
        $this->json()->user_statistic = array();

        foreach ($user_statistics as $user_statistic) {
            $this->json()->user_statistic[] = $user_statistic->json();
        } 
    }

    /**
     * A list of proxy information for users.
     *
     * @return ProxyForUser[]
     */
    public function getProxyForUsers()
    {
        $final = array();

        foreach ((array) $this->json()->proxy_for_user as $proxy_for_user) {
            $final[] = new ProxyForUser($proxy_for_user);
        }

        return $final;
    }

    /**
     * A list of proxy information for users.
     *
     * @param ProxyForUser[] $proxy_for_users
     */
    public function setProxyForUsers(array $proxy_for_users)
    {
        $this->json()->proxy_for_user = array();

        foreach ($proxy_for_users as $proxy_for_user) {
            $this->json()->proxy_for_user[] = $proxy_for_user->json();
        } 
    }

    /**
     * List of the user's related resource sharing libraries.
     * 
     * On SIS synch this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record). For external users in PUT action:
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record), unless 'override' parameter is sent with the
     * field's name.
     *
     * @return RsLibrary[]
     */
    public function getRsLibraries()
    {
        $final = array();

        foreach ((array) $this->json()->rs_library as $rs_librarie) {
            $final[] = new RsLibrary($rs_librarie);
        }

        return $final;
    }

    /**
     * List of the user's related resource sharing libraries.
     * 
     * On SIS synch this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record). For external users in PUT action:
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record), unless 'override' parameter is sent with the
     * field's name.
     *
     * @param RsLibrary[] $rs_libraries
     */
    public function setRsLibraries(array $rs_libraries)
    {
        $this->json()->rs_library = array();

        foreach ($rs_libraries as $rs_librarie) {
            $this->json()->rs_library[] = $rs_librarie->json();
        } 
    }

    /**
     * List of the user's library notices.
     * 
     * On SIS synch this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record). For external users in PUT action:
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record), unless 'override' parameter is sent with the
     * field's name.
     *
     * @return LibraryNotice[]
     */
    public function getLibraryNotices()
    {
        $final = array();

        foreach ((array) $this->json()->library_notice as $library_notice) {
            $final[] = new LibraryNotice($library_notice);
        }

        return $final;
    }

    /**
     * List of the user's library notices.
     * 
     * On SIS synch this field will not be replaced if it was updated manually (or
     * if empty in the incoming user record). For external users in PUT action:
     * this field will not be replaced if it was updated manually (or if empty in
     * the incoming user record), unless 'override' parameter is sent with the
     * field's name.
     *
     * @param LibraryNotice[] $library_notices
     */
    public function setLibraryNotices(array $library_notices)
    {
        $this->json()->library_notice = array();

        foreach ($library_notices as $library_notice) {
            $this->json()->library_notice[] = $library_notice->json();
        } 
    }

    /**
     * Reference to the system internal unique identifier at the institution
     * identified by source_institution_code .
     * 
     * This field is populated at the copy user record (linked account). The value
     * is equal to the linking_id at the source institution (identified by
     * source_institution_code).
     *
     * @return string
     */
    public function getSourceLinkId()
    {
        return (string) $this->json()->source_link_id;
    }

    /**
     * The code of the institution where the source user record is managed.
     * 
     * This field is populated at the copy user record (linked account).
     *
     * @return string
     */
    public function getSourceInstitutionCode()
    {
        return (string) $this->json()->source_institution_code;
    }

    /**
     * The system internal unique identifier of the source user account.
     * 
     * This field is populated at the source user record. This can be used to
     * fetch copies of the user record (linked accounts in other institutions) by
     * calling the Get-User API with the source_institution_code parameter.
     *
     * @return string
     */
    public function getLinkingId()
    {
        return (string) $this->json()->linking_id;
    }

    /**
     * Link
     *
     * @return string
     */
    public function getLink()
    {
        return (string) $this->json()->link;
    }

    /**
     * Link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->json()->link = $link;
    }
}
