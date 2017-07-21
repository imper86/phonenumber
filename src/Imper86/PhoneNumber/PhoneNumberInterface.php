<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 21.07.17
 * Time: 14:04
 */

namespace Imper86\PhoneNumber;


interface PhoneNumberInterface
{
    public function getCountryCode(): ?int;

    public function getNationalNumber(): ?string;

    public function getInternationalNumber(): string;

    public function getExtension(): ?string;

    public function getRawInput(): ?string;

    public function isPossibleNumber(): bool;

    public function isValidNumber(): bool;

    public function getRegionCodeForNumber(): ?string;

    public function getNumberType(): int;

    public function getIsMobile(): bool;

    public function formatE164(): string;

    public function formatInternational(): string;

    public function formatNational(): string;

    public function formatRFC3966(): string;
}