# VZS Wordpress Šablona 2.0

Toto je přepracovaná verze šablony VZS Wordpress dostupné na https://github.com/VZSCCK/wp-vzs-theme/ 

Přepracování bylo nutné, protože náš pobočný spolek chtěl použít základní design šablony ovšem přizpůsobit jí naším 
potřebám. Chtěli jsme prostě nové webovky a zvolit oficiální šablonu vypadlo jako dobrý nápad. Po cca měsíci práce 
už jsem si tak jistý nebyl :D Výsledek si můžeme prohlídnout na adrese [https://www.vzs-jablonec.cz] 
 
Původní šablona nebyla vůbec otevřená úpravám a hodně funkcionality a textů je tam natvrdo přímo v kódu šablony. 
Čili pokud jí chcete přizpůsobit, musíte být jak programátoři, tak kodéři, což mnoho lidí není a už vůbec ne lidi 
používající Worpress. Naopak Wordpress je znám jako systém pro méně technicky zdatné uživatele, který dovoluje 
velké přizpůsobení šablony, textu atd...

## Cíle projektu
 
1. Zjednodušit šablonu tak, aby bylo možné co největší uživatelské přizpůsobení bez přímé úpravy kódu
2. Urychlit načítání nahrazením prastarých technik jako obrázkové pozadí a nahrazením moderními technikami CSS a SVG.
3. Vynechání nepotřebných funkcionalit a nepoužívaného balastu jako načítání celého *icon fontu* kvůli jednomu obrázku 

Následující text předpokládá, že ovládáte základy Wordpresu, takto tvorba obsahu, menu, práce s widgety 
a instalace pluginů. 

## Přizpůsobení Vašim potřebám

### Změna podtitulu
První změnu je nutné udělat přímo z kódu, nejde to bohužel udělat jinak. V souboru `header.php` najděte 
na řádku `35` text `<strong class="subtitle">Jablonec nad Nisou</strong>` a změňte `Jablonec nad Nisou` na název 
vašeho spolku nebo ho vymažte.

### Změna fotografie na pozadí
Toto už zle udělat z **administrativního rozhraní** přístupné na `vase-adresa.cz/wp-admin/`.
 
Jdete na **Vzhled → Záhlaví** a tlačítkem **Přidat obrázek** si můžete vybrat vlastní fotografii. Rozměry jsou na Vás, 
nemusíte obrázek ořezávat. Pouze je dobré aby šířka byla vyšší než **2000 pixelů** kvůli zobrazení na velkých monitorech.
 
Příklad jak může fotografie vypadat (pro náš spolek) můžete najít v souboru `extras/bg.html`.
     
### Výpis novinkek v postraním panelu pod menu
Původní šablona to měla natvrdo zakódované, tady je to pouze jako možnost. Celý postranní sloupec pod menu je registrován 
jako *dynamický sidebar*, takže je do něj možno přidávat jakýkoliv obsah. 
   
Pro zobrazení posledních novinek v postaním panelu je nám nejvíce osvědčil
[plugin Ultimate Posts Widget](https://cs.wordpress.org/plugins/ultimate-posts-widget/) Stačí ho nainstalovat, aktivovat
a následně **Vzhled → Widgety** ho přidat do panelu **Sidebar**.
   
**Ultimate Posts Widget** umožňuje poté nastavit z jaké kategorie se mají příspěvky brát, kolik jich zobrazit, 
co z nich atd... V nastavení doporučuje hodnotu **CSS class** nastavit na `news` aby to barevně odpovídalo původní šabloně.

Nastavení obashuje i veličiny **After post** a **Before post** kam můžete vložit libovolný HTML obsah 
třeba třeba odkaz na stránku se všemi aktualitami nebo odkaz na facebook (původní obrázek viz `extras/fcb.html`).  
     
### Zobrazení jinéhp typu obsahu v posdtením panenu (kalendář, obrázek, odkaz)
*Dynamický sidebar* umožňuje vložit libovolný typ obsahu, na jaký máte *widget*. Nejsnadnější je použít widgety 
**HTML, Text, Obrázek atd...** 

Původní obsah postranního panelu můžete najít v souboru `extras/sidebar.html`.

My tam máme HTML kontejneer obrázky s odkazem na **Facebook** a **YouTube** (viz `extras/facebook.svg` a `extras/youtube.svg`)

### Obsah v patičce webu
I patička obsahuje *dynamický sidebar*, tentokrát s názvem **Footer** a můžete přidat libovolný obsah podobně 
jako je uvedeno  výše. My tam třeba máme HTML prvek s textem `Vodní záchranná služba ČČK Jablonec nad Nisou` ale může 
to být klidně prázdné. 
  
### Drobečková navigace nad textem
V původní šabloně šlo o plugin, nebylo to součástí funkčnosti šablony. Nebyl jsem schopen přijít na to, který přesně 
použili ale pravděpodobně šlo o [plugin Breadcrumb NavXT](https://cs.wordpress.org/plugins/breadcrumb-navxt/) .
Opět stačí ho nainstalovat a aktivovat. Bude to chtít asi nějaké to šťourání v nastavení, aby vyhovoval vaším potřebám. 
 
### Ikony v menu
Původní šablona to měla pevně zadrátované v kódu. Nyní je to trochu volnější. Připravte si obrázek 
o velikosti `20x20 pixelů` (příklad viz `extras/image.svg`), jděte do souboru `style.css` na řádek `159`, 
kde jsou definované třídy na obrázky v menu.
  
Vytvořte si vlastní třídu a zadejte adresu k obrázku. Jděte do **Vzhled → Menu**, najděte položku kde chcete mít ikonu 
a do pole **CSS třídy (volitelné)** zadejte název vaší třídy a k tomu ještě třídu `image` (oddělené mezerou).

Pokud položku **CSS třídy (volitelné)** nevidíte, nahoře na stránce klikněte na tlačítko **Nastavení zobrazených 
informacích** a zaškrtněte položku *CSS třídy*. 

## Další pluginy
Doporučujeme nainstalovat i jiné pluginy:

1. [Google Apps Login](https://cs.wordpress.org/plugins/google-apps-login/) Bezpečnější přihlášení přes účty Googlu. 
Wordpress je známý časnými útoky na přihlašovací stránku, tohle jim zatne tipec.
2. [Google XML Sitemaps](https://cs.wordpress.org/plugins/google-sitemap-generator/) Lepší indexování webu Googlem.
3. [Facebook Auto Publish](https://cs.wordpress.org/plugins/facebook-auto-publish/) Články z Wordpressu se automatiky 
publikují i na Vaši stránku na Facebooku.
4. [WP Statistics](https://cs.wordpress.org/plugins/wp-statistics/) Podrobné statistiky návštěvnosti. 