<div class="container" style="margin-top: 15px;">
    <div class="row">
        <h2>
            <strong>Cooking Lamb</strong>
        </h2>
        <div class="box ">
            <div class="col-md-12 text-center">
                <div style="margin-bottom: 10px;">
                    {$content.page.post_content}
                </div>
                <div class="btn-group" role="group" style="margin-bottom: 10px;">
                    <button class="btn btn-default" type="submit" id="btnCookingLamb">General Information</button>
                    <button class="btn btn-default" type="submit" id="btnBroiling">Broiling</button>
                    <button class="btn btn-default" type="submit" id="btnBraising">Braising</button>
                    <button class="btn btn-default" type="submit" id="btnRoasting">Roasting</button>
                </div>
                <div style="text-align:center;">
                    <img class="img-responsive" style="margin: 0 auto;" src="{$content.page.lamb_chart_image.url}" alt="{$content.page.lamb_chart_image.alt}" usemap="#lamb_cut_chart">
                    <map id="lamb_cut_chart" name="lamb_cut_chart"><area shape="poly" alt="Shoulder" title="" coords="94,7,90,8,86,11,83,14,80,22,79,30,78,44,81,62,82,75,80,95,79,117,80,130,84,148,84,150,152,144,147,62,131,56,122,48,118,40,115,24,109,13,103,8,99,6" href="#" target="" /><area shape="poly" alt="Rack" title="" coords="156,143,212,139,265,136,244,96,245,75,194,67,159,62,153,62,151,62" href="#" target="" /><area shape="poly" alt="Loin" title="" coords="340,89,351,142,306,138,269,136,247,95,248,79,275,84" href="#" target="" /><area shape="poly" alt="Leg" title="" coords="373,77,413,70,433,73,443,77,442,86,474,113,498,126,523,130,531,129,558,139,592,145,601,145,612,150,613,152,610,154,597,155,562,149,475,149,453,150,418,150,385,147,377,148,361,143,353,141,343,91,367,79" href="#" target="" /><area shape="poly" alt="Foreshank/Breast" title="" coords="35,176,69,164,82,156,85,151,144,147,204,143,253,139,289,141,340,143,355,145,373,149,333,156,288,163,255,168,233,177,214,183,182,188,158,189,138,186,129,183,119,176,110,180,89,186,63,190,41,192,37,192,34,190,32,187,31,184,31,181" href="#" target="" /></map>
                </div>
                <button id="btnAllRecipes" type="submit" class="btn btn-primary" style="margin-top: 10px;">All Recipes</button>
            </div>
        </div>
    </div>
</div>