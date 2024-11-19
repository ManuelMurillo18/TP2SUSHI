<?php

/*  Génère une balise Html ouvrante
    Paramètre(s):
        $name : nom de la balise
        $attributs : liste des attributs 
*/
function htmlHelperBeginTag(string|bool|null $name, array $attributs = []): string {
    $attributes = htmlHelperRenderAttributes($attributs);

    // Valider que le paramètre $name n'est pas null (ou False)
    return $name ? "<{$name} {$attributes}>" : '';
}


/*  Génère une balise Html fermante
    Paramètre(s):
        $name : nom de la balise
*/
function htmlHelperEndTag(string|bool|null $name): string {
    // Valider que le paramètre $name n'est pas null (ou False)
    return $name ? "</{$name}>" : '';
}


/*  Transforme un tableau associatif en attribut(s) Html
    Paramètre(s):
        $attributs : liste des attributs dans un tableau associatif
*/
function htmlHelperRenderAttributes(array $attributes) : string {

    $result = "";
    foreach ($attributes as $key => $value) {
        if ($value) {
            $result .= "{$key}='{$value}' ";
        }
    }

    return $result;
}


/*  Génère une balise Html complète (incluant les balises d'ouverture et de fermeture)
    Paramètre(s):
        $name : nom de la balise
        $label : valeur à afficher
        $attributs : liste des attributs 
*/
function htmlHelperTag(string|bool|null $name, string $label = "", array $attributs = []) : string {
    // Valider que le paramètre $name n'est pas null (ou False), dans ce cas retourner seulement le $label        
    if (! $name) {
        return $label;
    }

    return htmlHelperBeginTag($name, $attributs) . $label . htmlHelperEndTag($name);
}


/*  Retourne une balise Html "<input>" de type "radio"
    Paramètre(s):
        $checked : indique si cette balise doit-être sélectionnée
        $attributs : le(s) attribut(s) de la balise

    Note   : Ajouter l'attribut type = "radio" dans le tableau des attributs s'il n'est pas déjà présent.
    Note-2 : Ajouter l'attribut checked dans le tableau des attributs selon la valeur reçu en paramètre.
*/
function htmlHelperRadio(bool $checked = false, array $attributs = []) : string {
// TODO
    if (! isset($attributs['type'])) {
        $attributs['type'] = 'radio';
    }

    if (! isset($attributs['checked'])) {
        $attributs['checked'] = $checked;
    }

    return htmlHelperBeginTag("input", $attributs);
}


/*  Retourne une balise Html "<label>"
    Paramètre(s):
        $label : texte à afficher
        $attributs : le(s) attribut(s) de la balise
*/
function htmlHelperLabel(string $label, array $attributs = []) : string {
    return htmlHelperBeginTag("label", $attributs) . $label . htmlHelperEndTag("label");
}


/* Retourne une balise complète Html <select>"
    Paramètre(s):
        $selectAttributs : attribut(s) de la balise <select>
        $options : tableau contenant les éléments des <options> sous le format :
            clé = le <value>
            valeur = description de l'<option>
        $selectedValue : chaîne de caractère correspondant au <value> qui doit-être sélectionné par défaut
*/
function htmlHelperDropDownListAsso(array $selectAttributs, array $options) : string {
    $select = htmlHelperBeginTag("select", $selectAttributs);
    foreach ($options as $key => $value) {
            $select .= htmlHelperTag("option", $value, ["value" => $key]);
    }
    $select .= htmlHelperEndTag("select");
    return $select;
}

function htmlHelperDropDownListArray(array $selectAttributs, array $options, string $optionSelected) : string {
    $select = htmlHelperBeginTag("select", $selectAttributs);
    foreach ($options as $option) {
        if($option === $optionSelected){
            $select .= htmlHelperTag("option", $option, ["value" => $option, "selected" => "selected"]);
        }
        else{
            $select .= htmlHelperTag("option", $option, ["value" => $option]);
        }
    }
    $select .= htmlHelperEndTag("select");
    return $select;
}
/*  Retourne une balise complète Html "<table>"
    Paramètre(s):
        $tableAttributs : attribut(s) de la balise <table>
        $columnHeader : tableau à 2 dimensions sous le format :
            clé = texte de l'entête
            valeur = attribut(s) de cette entête
        $data : tableau indexé contenant les données du tableau
*/        
function htmlHelperTable(array $tableAttributs = [], array $columnHeader = [], array $data = []) {
// TODO : Faire le code de la fonction
    $table = htmlHelperBeginTag("table", $tableAttributs);
    $table .= htmlHelperBeginTag("thead");
    $table .= htmlHelperBeginTag("tr");
    foreach ($columnHeader as $key => $value) {
        $table .= htmlHelperTag("th", $key, $value);
    }
    $table .= htmlHelperEndTag("tr");
    $table .= htmlHelperEndTag("thead");
    $table .= htmlHelperGenerateTableBody($data);
    $table .= htmlHelperEndTag("table");
    return $table;
}


/*  Retourne la section <tbody> d'une balise Html "<table>"
    Paramètre(s):
        $data : données du tableau à plusieurs dimensions
*/ 
function htmlHelperGenerateTableBody($data) : string {
    $tbody = htmlHelperBeginTag("tbody");
    foreach ($data as $item) {
        $tbody .= htmlHelperBeginTag("tr");
        foreach($item as $element) {
            $tbody .= htmlHelperTag("td", $element);
        }
        $tbody .= htmlHelperEndTag("tr");
    }
    $tbody .= htmlHelperEndTag("tbody");
    return $tbody;
}
    