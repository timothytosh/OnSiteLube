<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\ServiceScheduleRepository")
 */
class ServiceSchedule {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="Name", type="string", length=45)
   */
  private $name;

  /**
   * @var integer
   *
   * @ORM\Column(name="OilChgFilterMiles", type="integer")
   */
  private $oilChgFilterMiles;

  /**
   * @var integer
   *
   * @ORM\Column(name="OilChgFilterHours", type="integer")
   */
  private $oilChgFilterHours;

  /**
   * @var integer
   *
   * @ORM\Column(name="OilChgFilterMonths", type="integer")
   */
  private $oilChgFilterMonths;

  /**
   * @var integer
   *
   * @ORM\Column(name="FuelFilterMiles", type="integer")
   */
  private $fuelFilterMiles;

  /**
   * @var integer
   *
   * @ORM\Column(name="FuelFilterHours", type="integer")
   */
  private $fuelFilterHours;

  /**
   * @var integer
   *
   * @ORM\Column(name="AirFilterMiles", type="integer")
   */
  private $airFilterMiles;

  /**
   * @var integer
   *
   * @ORM\Column(name="AirFilterHours", type="integer")
   */
  private $airFilterHours;

  /**
   * @var integer
   *
   * @ORM\Column(name="TransFilterMiles", type="integer")
   */
  private $transFilterMiles;

  /**
   * @var integer
   *
   * @ORM\Column(name="TransFilterHours", type="integer")
   */
  private $transFilterHours;

  /**
   * @var integer
   *
   * @ORM\Column(name="TransFilterMonths", type="integer")
   */
  private $transFilterMonths;



} 