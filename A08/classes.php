<?php
class islandOfPersonality
{
    public $islandOfPersonalityID;
    public $image;
    public $name;
    public $color;
    public $shortDescription;
    public function __construct($islandOfPersonalityID, $image, $name, $color, $shortDescription)
    {
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->name = $name;
        $this->color = $color;
        $this->shortDescription = $shortDescription;
    }

   public function buildIslandOfPersonalityContainer()
{
    return '
        <div class="col-12 col-lg-6 p-4 d-flex justify-content-center" style="overflow: hidden;">
            <div class="card" style="width: 500px; height: 100%; background-color: ' . $this->color . '; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="shared/assets/img/' . $this->image . '" class="card-img-top img-fluid" alt="Island Image" style="border-radius: 15px 15px 0 0;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center" style=" padding: 20px;">
                    <h5 class="card-title islandName" style="color: white; margin-bottom: 20px;">' . $this->name . '</h5>
                    <p class="card-text" style="color: white; margin-bottom: 30px; text-align: center;">' . $this->shortDescription . '</p>
                    <a href="view.php?id=' . $this->islandOfPersonalityID . '" class="btn btn-primary" style="background-color: #fff; color: ' . $this->color . '; border: none;">View Island</a>
                </div>
            </div>
        </div>
    ';
}


}

class contentHeader
{
    public $name;
    public $color;
    public $shortDescription;
    public function __construct($name, $color, $shortDescription)
    {
        $this->name = $name;
        $this->color = $color;
        $this->shortDescriptionDescription = $shortDescription;
    }

    public function buildHeader()
    {
        return
            '
            <h1 class="display-2 title text-center mb-5">' . $this->name . '</h1>
        ';
    }
}
class islandContent
{
    public $islandContentID;
    public $islandOfPersonalityID;
    public $image;
    public $content;
    public $color;
    public function __construct($islandContentID, $islandOfPersonalityID, $image, $content, $color)
    {
        $this->islandContentID = $islandContentID;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->content = $content;
        $this->color = $color;
    }

    public function buildContentContainer()
    {
        return 
            '
            <div class="d-flex justify-content-center align-items-center">
                <div class="card mb-3 mx-3 mb-5" style="max-width:70%; background-color:' . $this->color . '; height: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="shared/assets/img/' . $this->image . '" class="img-fluid rounded img-elements" alt="Image for ' . $this->content . '">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                                <p class="card-text">' . $this->content . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
    }
    
    
}
?>