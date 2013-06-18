<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class Users extends \Entity
{
    /**
     * @return \Entity\Repository\UserRepository
     */
     public static function repository(){
        return \Entity\Repository\UserRepository::instance();
    }

    /**
     * @return \Entity\User
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $user_id
     */
    protected $user_id;

    /**
     * @var string $lastname
     */
    protected $lastname;

    /**
     * @var string $firstname
     */
    protected $firstname;

    /**
     * @var string $username
     */
    protected $username;

    /**
     * @var string $password
     */
    protected $password;

    /**
     * @var string $auth_source
     */
    protected $auth_source;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var boolean $status
     */
    protected $status;

    /**
     * @var string $official_code
     */
    protected $official_code;

    /**
     * @var string $phone
     */
    protected $phone;

    /**
     * @var string $picture_uri
     */
    protected $picture_uri;

    /**
     * @var integer $creator_id
     */
    protected $creator_id;

    /**
     * @var text $competences
     */
    protected $competences;

    /**
     * @var text $diplomas
     */
    protected $diplomas;

    /**
     * @var text $openarea
     */
    protected $openarea;

    /**
     * @var text $teach
     */
    protected $teach;

    /**
     * @var string $productions
     */
    protected $productions;

    /**
     * @var integer $chatcall_user_id
     */
    protected $chatcall_user_id;

    /**
     * @var datetime $chatcall_date
     */
    protected $chatcall_date;

    /**
     * @var string $chatcall_text
     */
    protected $chatcall_text;

    /**
     * @var string $language
     */
    protected $language;

    /**
     * @var datetime $registration_date
     */
    protected $registration_date;

    /**
     * @var datetime $expiration_date
     */
    protected $expiration_date;

    /**
     * @var boolean $active
     */
    protected $active;

    /**
     * @var string $openid
     */
    protected $openid;

    /**
     * @var string $theme
     */
    protected $theme;

    /**
     * @var smallint $hr_dept_id
     */
    protected $hr_dept_id;


    /**
     * Get user_id
     *
     * @return integer
     */
    public function get_user_id()
    {
        return $this->user_id;
    }

    /**
     * Set lastname
     *
     * @param string $value
     * @return User
     */
    public function set_lastname($value)
    {
        $this->lastname = $value;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function get_lastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $value
     * @return User
     */
    public function set_firstname($value)
    {
        $this->firstname = $value;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function get_firstname()
    {
        return $this->firstname;
    }

    /**
     * Set username
     *
     * @param string $value
     * @return User
     */
    public function set_username($value)
    {
        $this->username = $value;
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function get_username()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $value
     * @return User
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function get_password()
    {
        return $this->password;
    }

    /**
     * Set auth_source
     *
     * @param string $value
     * @return User
     */
    public function set_auth_source($value)
    {
        $this->auth_source = $value;
        return $this;
    }

    /**
     * Get auth_source
     *
     * @return string
     */
    public function get_auth_source()
    {
        return $this->auth_source;
    }

    /**
     * Set email
     *
     * @param string $value
     * @return User
     */
    public function set_email($value)
    {
        $this->email = $value;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function get_email()
    {
        return $this->email;
    }

    /**
     * Set status
     *
     * @param boolean $value
     * @return User
     */
    public function set_status($value)
    {
        $this->status = $value;
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function get_status()
    {
        return $this->status;
    }

    /**
     * Set official_code
     *
     * @param string $value
     * @return User
     */
    public function set_official_code($value)
    {
        $this->official_code = $value;
        return $this;
    }

    /**
     * Get official_code
     *
     * @return string
     */
    public function get_official_code()
    {
        return $this->official_code;
    }

    /**
     * Set phone
     *
     * @param string $value
     * @return User
     */
    public function set_phone($value)
    {
        $this->phone = $value;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function get_phone()
    {
        return $this->phone;
    }

    /**
     * Set picture_uri
     *
     * @param string $value
     * @return User
     */
    public function set_picture_uri($value)
    {
        $this->picture_uri = $value;
        return $this;
    }

    /**
     * Get picture_uri
     *
     * @return string
     */
    public function get_picture_uri()
    {
        return $this->picture_uri;
    }

    /**
     * Set creator_id
     *
     * @param integer $value
     * @return User
     */
    public function set_creator_id($value)
    {
        $this->creator_id = $value;
        return $this;
    }

    /**
     * Get creator_id
     *
     * @return integer
     */
    public function get_creator_id()
    {
        return $this->creator_id;
    }

    /**
     * Set competences
     *
     * @param text $value
     * @return User
     */
    public function set_competences($value)
    {
        $this->competences = $value;
        return $this;
    }

    /**
     * Get competences
     *
     * @return text
     */
    public function get_competences()
    {
        return $this->competences;
    }

    /**
     * Set diplomas
     *
     * @param text $value
     * @return User
     */
    public function set_diplomas($value)
    {
        $this->diplomas = $value;
        return $this;
    }

    /**
     * Get diplomas
     *
     * @return text
     */
    public function get_diplomas()
    {
        return $this->diplomas;
    }

    /**
     * Set openarea
     *
     * @param text $value
     * @return User
     */
    public function set_openarea($value)
    {
        $this->openarea = $value;
        return $this;
    }

    /**
     * Get openarea
     *
     * @return text
     */
    public function get_openarea()
    {
        return $this->openarea;
    }

    /**
     * Set teach
     *
     * @param text $value
     * @return User
     */
    public function set_teach($value)
    {
        $this->teach = $value;
        return $this;
    }

    /**
     * Get teach
     *
     * @return text
     */
    public function get_teach()
    {
        return $this->teach;
    }

    /**
     * Set productions
     *
     * @param string $value
     * @return User
     */
    public function set_productions($value)
    {
        $this->productions = $value;
        return $this;
    }

    /**
     * Get productions
     *
     * @return string
     */
    public function get_productions()
    {
        return $this->productions;
    }

    /**
     * Set chatcall_user_id
     *
     * @param integer $value
     * @return User
     */
    public function set_chatcall_user_id($value)
    {
        $this->chatcall_user_id = $value;
        return $this;
    }

    /**
     * Get chatcall_user_id
     *
     * @return integer
     */
    public function get_chatcall_user_id()
    {
        return $this->chatcall_user_id;
    }

    /**
     * Set chatcall_date
     *
     * @param datetime $value
     * @return User
     */
    public function set_chatcall_date($value)
    {
        $this->chatcall_date = $value;
        return $this;
    }

    /**
     * Get chatcall_date
     *
     * @return datetime
     */
    public function get_chatcall_date()
    {
        return $this->chatcall_date;
    }

    /**
     * Set chatcall_text
     *
     * @param string $value
     * @return User
     */
    public function set_chatcall_text($value)
    {
        $this->chatcall_text = $value;
        return $this;
    }

    /**
     * Get chatcall_text
     *
     * @return string
     */
    public function get_chatcall_text()
    {
        return $this->chatcall_text;
    }

    /**
     * Set language
     *
     * @param string $value
     * @return User
     */
    public function set_language($value)
    {
        $this->language = $value;
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function get_language()
    {
        return $this->language;
    }

    /**
     * Set registration_date
     *
     * @param datetime $value
     * @return User
     */
    public function set_registration_date($value)
    {
        $this->registration_date = $value;
        return $this;
    }

    /**
     * Get registration_date
     *
     * @return datetime
     */
    public function get_registration_date()
    {
        return $this->registration_date;
    }

    /**
     * Set expiration_date
     *
     * @param datetime $value
     * @return User
     */
    public function set_expiration_date($value)
    {
        $this->expiration_date = $value;
        return $this;
    }

    /**
     * Get expiration_date
     *
     * @return datetime
     */
    public function get_expiration_date()
    {
        return $this->expiration_date;
    }

    /**
     * Set active
     *
     * @param boolean $value
     * @return User
     */
    public function set_active($value)
    {
        $this->active = $value;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function get_active()
    {
        return $this->active;
    }

    /**
     * Set openid
     *
     * @param string $value
     * @return User
     */
    public function set_openid($value)
    {
        $this->openid = $value;
        return $this;
    }

    /**
     * Get openid
     *
     * @return string
     */
    public function get_openid()
    {
        return $this->openid;
    }

    /**
     * Set theme
     *
     * @param string $value
     * @return User
     */
    public function set_theme($value)
    {
        $this->theme = $value;
        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function get_theme()
    {
        return $this->theme;
    }

    /**
     * Set hr_dept_id
     *
     * @param smallint $value
     * @return User
     */
    public function set_hr_dept_id($value)
    {
        $this->hr_dept_id = $value;
        return $this;
    }

    /**
     * Get hr_dept_id
     *
     * @return smallint
     */
    public function get_hr_dept_id()
    {
        return $this->hr_dept_id;
    }
}
