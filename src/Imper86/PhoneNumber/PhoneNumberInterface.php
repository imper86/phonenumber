<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 21.07.17
 * Time: 14:04
 */

namespace Imper86\PhoneNumber;


interface PhoneNumberInterface
{
    /**
     * Sam kierunkowy, np 48
     * @return int|null
     */
    public function getCountryCode(): ?int;

    /**
     * Czysty numer bez spacji, np 888333000
     * @return null|string
     */
    public function getNationalNumber(): ?string;

    /**
     * Numer z kierunkowym z plusem, np +48888333000
     * @return string
     */
    public function getInternationalNumber(): string;

    /**
     * Pojęcia nie mam :D
     * @return null|string
     */
    public function getExtension(): ?string;

    /**
     * Zwraca raw input
     * @return null|string
     */
    public function getRawInput(): ?string;

    /**
     * Czy istnienie numeru jest prawdopodobne
     * @return bool
     */
    public function isPossibleNumber(): bool;

    /**
     * Czy numer jest poprawny
     * @return bool
     */
    public function isValidNumber(): bool;

    /**
     * Kod iso kraju, np PL
     * @return null|string
     */
    public function getRegionCodeForNumber(): ?string;

    /**
     * Typ numeru
     * @return int
     */
    public function getNumberType(): int;

    /**
     * Czy numer jest komórkowy
     * @return bool
     */
    public function isMobile(): bool;

    /**
     * to samo co InternationalNumber, czyli np +48888333000
     * @return string
     */
    public function formatE164(): string;

    /**
     * format przyjazny, np +48 888 333 000
     * @return string
     */
    public function formatInternational(): string;

    /**
     * format przyjazny bez kierunkowego 888 333 000
     * @return string
     */
    public function formatNational(): string;

    /**
     * format np tel:+48-888-333-000
     * @return string
     */
    public function formatRFC3966(): string;
}