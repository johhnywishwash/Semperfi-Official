//	HYPE.documents["header"]

(function HYPE_DocumentLoader() {
	var resourcesFolderName = "header_Resources";
	var documentName = "header";
	var documentLoaderFilename = "header_hype_generated_script.js";

	// find the URL for this script's absolute path and set as the resourceFolderName
	try {
		var scripts = document.getElementsByTagName('script');
		for(var i = 0; i < scripts.length; i++) {
			var scriptSrc = scripts[i].src;
			if(scriptSrc != null && scriptSrc.indexOf(documentLoaderFilename) != -1) {
				resourcesFolderName = scriptSrc.substr(0, scriptSrc.lastIndexOf("/"));
				break;
			}
		}
	} catch(err) {	}

	// load HYPE.js if it hasn't been loaded yet
	if(typeof HYPE == "undefined") {
		if(typeof window.HYPE_DocumentsToLoad == "undefined") {
			window.HYPE_DocumentsToLoad = new Array();
			window.HYPE_DocumentsToLoad.push(HYPE_DocumentLoader);

			var headElement = document.getElementsByTagName('head')[0];
			var scriptElement = document.createElement('script');
			scriptElement.type= 'text/javascript';
			scriptElement.src = resourcesFolderName + '/' + 'HYPE.js';
			headElement.appendChild(scriptElement);
		} else {
			window.HYPE_DocumentsToLoad.push(HYPE_DocumentLoader);
		}
		return;
	}
	
	var attributeTransformerMapping = {"BorderColorRight":"ColorValueTransformer","BackgroundColor":"ColorValueTransformer","BorderWidthBottom":"PixelValueTransformer","WordSpacing":"PixelValueTransformer","BoxShadowXOffset":"PixelValueTransformer","Opacity":"FractionalValueTransformer","BorderWidthRight":"PixelValueTransformer","BorderWidthTop":"PixelValueTransformer","BoxShadowColor":"ColorValueTransformer","BorderColorBottom":"ColorValueTransformer","FontSize":"PixelValueTransformer","BorderRadiusTopRight":"PixelValueTransformer","TextColor":"ColorValueTransformer","Rotate":"DegreeValueTransformer","Height":"PixelValueTransformer","PaddingLeft":"PixelValueTransformer","BorderColorTop":"ColorValueTransformer","Top":"PixelValueTransformer","BackgroundGradientStartColor":"ColorValueTransformer","TextShadowXOffset":"PixelValueTransformer","PaddingTop":"PixelValueTransformer","BackgroundGradientAngle":"DegreeValueTransformer","PaddingBottom":"PixelValueTransformer","PaddingRight":"PixelValueTransformer","Width":"PixelValueTransformer","TextShadowColor":"ColorValueTransformer","BorderColorLeft":"ColorValueTransformer","ReflectionOffset":"PixelValueTransformer","Left":"PixelValueTransformer","BorderRadiusBottomRight":"PixelValueTransformer","LineHeight":"PixelValueTransformer","BoxShadowYOffset":"PixelValueTransformer","ReflectionDepth":"FractionalValueTransformer","BorderRadiusTopLeft":"PixelValueTransformer","BorderRadiusBottomLeft":"PixelValueTransformer","TextShadowBlurRadius":"PixelValueTransformer","TextShadowYOffset":"PixelValueTransformer","BorderWidthLeft":"PixelValueTransformer","BackgroundGradientEndColor":"ColorValueTransformer","BoxShadowBlurRadius":"PixelValueTransformer","LetterSpacing":"PixelValueTransformer"};

var scenes = [{"timelines":{"kTimelineDefaultIdentifier":{"framesPerSecond":30,"animations":[{"startValue":"0.000000","isRelative":true,"endValue":"0.000000","identifier":"Opacity","duration":2.5333333015441895,"timingFunction":"easeinout","type":0,"oid":"C1F77032-0F80-4053-A14E-8491E68C4752-7793-000113388AB7DB31","startTime":0},{"startValue":"0.000000","isRelative":true,"endValue":"1.000000","identifier":"Opacity","duration":3.8333332538604736,"timingFunction":"easeinout","type":0,"oid":"725ADBA4-B2BC-4732-8041-A685512B6D6A-7793-0001131C71177ACC","startTime":0},{"startValue":"-482px","isRelative":true,"endValue":"0px","identifier":"Top","duration":3,"timingFunction":"easeinout","type":0,"oid":"725ADBA4-B2BC-4732-8041-A685512B6D6A-7793-0001131C71177ACC","startTime":0},{"startValue":"0.000000","isRelative":false,"endValue":"1.000000","identifier":"Opacity","duration":1.7333335876464844,"timingFunction":"easeinout","type":0,"oid":"C1F77032-0F80-4053-A14E-8491E68C4752-7793-000113388AB7DB31","startTime":2.5333333015441895}],"identifier":"kTimelineDefaultIdentifier","name":"Main Timeline","duration":4.2666668891906738}},"id":"64BE24B4-A32B-4092-86E6-D08E66E5A559-7363-00010BAC9A505625","sceneIndex":0,"perspective":"600px","oid":"64BE24B4-A32B-4092-86E6-D08E66E5A559-7363-00010BAC9A505625","initialValues":{"725ADBA4-B2BC-4732-8041-A685512B6D6A-7793-0001131C71177ACC":{"Position":"absolute","BackgroundOrigin":"content-box","Left":"0px","Display":"inline","BackgroundImage":"fly-1.png","ReflectionOffset":"0px","Height":"482px","Overflow":"visible","BackgroundSize":"100% 100%","ZIndex":"3","Top":"-482px","Width":"787px","Opacity":"0.000000","ReflectionDepth":"0.000000","TagName":"div"},"C1F77032-0F80-4053-A14E-8491E68C4752-7793-000113388AB7DB31":{"Position":"absolute","BackgroundOrigin":"content-box","Left":"151px","Display":"inline","BackgroundImage":"semperfi.png","ReflectionOffset":"0px","Height":"74px","Overflow":"visible","BackgroundSize":"100% 100%","ZIndex":"35","Top":"84px","Width":"466px","Opacity":"0.000000","ReflectionDepth":"0.000000","TagName":"div"}},"name":"Untitled Scene","backgroundColor":"#FFFFFF"}];

var javascriptMapping = {"E438A5FF-19F4-4B1F-8DC5-AFFA6008875F-7625-00011245EB790FE1":"untitledFunction"};


	
	var Custom = (function() {
	return {

untitledFunction : function(hypeDocument, element) {
	/*	
		hypeDocument - access to the hype document API:
						METHODS:
						hypeDocument.documentName()
						hypeDocument.sceneNames()
						hypeDocument.currentSceneName()
						hypeDocument.showSceneNamed(sceneName, optionalTransition)
						hypeDocument.showNextScene(optionalTransition)
						hypeDocument.showPreviousScene(optionalTransition)
						hypeDocument.playTimelineNamed(timelineName)

						MORE INFO:
						http://tumultco.com/hype/documentation/javascript/
	
		element - DOMHTMLElement that triggered this function being called
	*/
	
	
}
	};
}());

	
	var hypeDoc = new HYPE();
	
	hypeDoc.attributeTransformerMapping = attributeTransformerMapping;
	hypeDoc.scenes = scenes;
	hypeDoc.javascriptMapping = javascriptMapping;
	hypeDoc.Custom = Custom;
	hypeDoc.currentSceneIndex = 0;
	hypeDoc.mainContentContainerID = "header_hype_container";
	hypeDoc.resourcesFolderName = resourcesFolderName;
	hypeDoc.showHypeBuiltWatermark = 0;
	hypeDoc.showLoadingPage = true;
	hypeDoc.drawSceneBackgrounds = false;
	hypeDoc.documentName = documentName;

	HYPE.documents[documentName] = hypeDoc.API;

	hypeDoc.documentLoad(this.body);
}());

