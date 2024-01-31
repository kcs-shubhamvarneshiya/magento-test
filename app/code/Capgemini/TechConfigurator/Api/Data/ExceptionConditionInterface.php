<?php
/**
 * Capgemini_TechConfigurator
 *
 * @author    Eugene Nazarov <eugene.nazarov@capgemini.com>
 * @copyright 2022 Capgemini, Inc (www.capgemini.com)
 */
namespace Capgemini\TechConfigurator\Api\Data;

/**
 * Exception Condition interface
 */
interface ExceptionConditionInterface
{
    /**
     * Id getter
     *
     * @return int
     */
    public function getId();

    /**
     * Id setter
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Exception Id getter
     *
     * @return int
     */
    public function getExceptionId();

    /**
     * Exception Id setter
     *
     * @param int $exceptionId
     * @return $this
     */
    public function setExceptionId($exceptionId);

    /**
     * Skupart Name getter
     *
     * @return string
     */
    public function getSkupartName();

    /**
     * Except Skupart Name setter
     *
     * @param string $skupartName
     * @return $this
     */
    public function setSkupartName($skupartName);

    /**
     * Option Character getter
     *
     * @return string
     */
    public function getOptionCharacter();

    /**
     * Option Character setter
     *
     * @param string $optionCharacter
     * @return $this
     */
    public function setOptionCharacter($optionCharacter);
}