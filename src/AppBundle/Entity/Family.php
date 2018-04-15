<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FamilyRepository")
 * @ORM\Table(name="family")
 */
class Family
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Child",
     *      mappedBy="family",
     *      fetch="EXTRA_LAZY",
     *      orphanRemoval=true,
     *     cascade={"persist"}
     *     )
     *
     * @Assert\Valid()
     * @ORM\OrderBy({"dateOfBirth" = "ASC"})
     */
    private $children;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $familyName;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Gedmo\Slug(fields={"familyName"})
     */
    private $slug;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $motherName;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $motherDateOfBirth;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $fatherName;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $fatherDateOfBirth;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * Family constructor.
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getMotherName()
    {
        return $this->motherName;
    }

    /**
     * @param mixed $motherName
     */
    public function setMotherName($motherName)
    {
        $this->motherName = $motherName;
    }

    /**
     * @return mixed
     */
    public function getMotherDateOfBirth()
    {
        return $this->motherDateOfBirth;
    }

    /**
     * @param mixed $motherDateOfBirth
     */
    public function setMotherDateOfBirth($motherDateOfBirth)
    {
        $this->motherDateOfBirth = $motherDateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * @param mixed $fatherName
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;
    }

    /**
     * @return mixed
     */
    public function getFatherDateOfBirth()
    {
        return $this->fatherDateOfBirth;
    }

    /**
     * @param mixed $fatherDateOfBirth
     */
    public function setFatherDateOfBirth($fatherDateOfBirth)
    {
        $this->fatherDateOfBirth = $fatherDateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Add child
     *
     * @param Child $child
     */
    public function addChild(Child $child)
    {
        if ($this->children->contains($child)) {
            return;
        }

        $this->children[] = $child;
        // needed to update the owning side of the relationship!
        $child->setFamily($this);
    }

    /**
     * Remove child
     *
     * @param Child $child
     */
    public function removeChild(Child $child)
    {
        if (!$this->children->contains($child)) {
            return;
        }

        $this->children->removeElement($child);
        // needed to update the owning side of the relationship!
        $child->setFamily(null);
    }

    /**
     * Get children
     *
     * @return ArrayCollection|Child[]
     */
    public function getChildren()
    {
        return $this->children;
    }
}
