<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceSchedule
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

  /**
   * @return int
   */
  public function getAirFilterHours()
  {
    return $this->airFilterHours;
  }

  /**
   * @param int $airFilterHours
   */
  public function setAirFilterHours($airFilterHours)
  {
    $this->airFilterHours = $airFilterHours;
  }

  /**
   * @return int
   */
  public function getAirFilterMiles()
  {
    return $this->airFilterMiles;
  }

  /**
   * @param int $airFilterMiles
   */
  public function setAirFilterMiles($airFilterMiles)
  {
    $this->airFilterMiles = $airFilterMiles;
  }

  /**
   * @return int
   */
  public function getFuelFilterHours()
  {
    return $this->fuelFilterHours;
  }

  /**
   * @param int $fuelFilterHours
   */
  public function setFuelFilterHours($fuelFilterHours)
  {
    $this->fuelFilterHours = $fuelFilterHours;
  }

  /**
   * @return int
   */
  public function getFuelFilterMiles()
  {
    return $this->fuelFilterMiles;
  }

  /**
   * @param int $fuelFilterMiles
   */
  public function setFuelFilterMiles($fuelFilterMiles)
  {
    $this->fuelFilterMiles = $fuelFilterMiles;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return int
   */
  public function getOilChgFilterHours()
  {
    return $this->oilChgFilterHours;
  }

  /**
   * @param int $oilChgFilterHours
   */
  public function setOilChgFilterHours($oilChgFilterHours)
  {
    $this->oilChgFilterHours = $oilChgFilterHours;
  }

  /**
   * @return int
   */
  public function getOilChgFilterMiles()
  {
    return $this->oilChgFilterMiles;
  }

  /**
   * @param int $oilChgFilterMiles
   */
  public function setOilChgFilterMiles($oilChgFilterMiles)
  {
    $this->oilChgFilterMiles = $oilChgFilterMiles;
  }

  /**
   * @return int
   */
  public function getOilChgFilterMonths()
  {
    return $this->oilChgFilterMonths;
  }

  /**
   * @param int $oilChgFilterMonths
   */
  public function setOilChgFilterMonths($oilChgFilterMonths)
  {
    $this->oilChgFilterMonths = $oilChgFilterMonths;
  }

  /**
   * @return int
   */
  public function getTransFilterHours()
  {
    return $this->transFilterHours;
  }

  /**
   * @param int $transFilterHours
   */
  public function setTransFilterHours($transFilterHours)
  {
    $this->transFilterHours = $transFilterHours;
  }

  /**
   * @return int
   */
  public function getTransFilterMiles()
  {
    return $this->transFilterMiles;
  }

  /**
   * @param int $transFilterMiles
   */
  public function setTransFilterMiles($transFilterMiles)
  {
    $this->transFilterMiles = $transFilterMiles;
  }

  /**
   * @return int
   */
  public function getTransFilterMonths()
  {
    return $this->transFilterMonths;
  }

  /**
   * @param int $transFilterMonths
   */
  public function setTransFilterMonths($transFilterMonths)
  {
    $this->transFilterMonths = $transFilterMonths;
  }

} 