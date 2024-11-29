<?php 

class Categorie {
    private ?int $id;
    private ?string $type;
    private ?string $url; // Ajout de l'attribut url

    // Constructor
    public function __construct(?int $id = null, ?string $type = null, ?string $url = null) {
        $this->id = $id;
        $this->type = $type;
        $this->url = $url; // Initialisation de l'attribut url
    }

    // Getters and Setters

    /**
     * Get the ID of the category
     *
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set the ID of the category
     *
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Get the type of the category
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the type of the category
     *
     * @param string|null $type
     */
    public function setType(?string $type): void {
        $this->type = $type;
    }

    /**
     * Get the URL of the category
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Set the URL of the category
     *
     * @param string|null $url
     */
    public function setUrl(?string $url): void {
        $this->url = $url;
    }
}

?>
