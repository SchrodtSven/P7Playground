<?php declare(strict_types=1);
/**
 * TidyConfig - @see https://api.html-tidy.org/tidy/quickref_5.8.0.html
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Html\Meta\Entity
 * @version 0.1
 */

namespace P7Playground\Frontend\Html\Meta\Entity;

class TidyConfig
{
    /**
     * Array holding configuration for tidy
     *
     * @see https://api.html-tidy.org/tidy/quickref_5.8.0.html
     * @var array
     */
    private array $config = [];
    /**
     * @var bool
     */
    private bool $gnuEmacs = false;
    /**
     * @var bool
     */
    private bool $markup = true;
    /**
     * @var string
     */
    private string $mute;
    /**
     * @var bool
     */
    private bool $muteId = false;
    /**
     * @var bool
     */
    private bool $quiet = false;
    /**
     * @var string
     */
    private string $showBodyOnly = 'no';
    /**
     * @var int
     */
    private int $showErrors = 6;
    /**
     * @var bool
     */
    private bool $showFilename = false;
    /**
     * @var bool
     */
    private bool $showInfo = true;
    /**
     * @var bool
     */
    private bool $showWarnings = true;
    /**
     * @var bool
     */
    private bool $addMetaCharset = false;
    /**
     * @var bool
     */
    private bool $addXmlDecl = false;
    /**
     * @var bool
     */
    private bool $addXmlSpace = false;
    /**
     * @var string
     */
    private string $doctype = 'auto';
    /**
     * @var bool
     */
    private bool $inputXml = false;
    /**
     * @var bool
     */
    private bool $outputHtml = false;
    /**
     * @var bool
     */
    private bool $outputXhtml = false;
    /**
     * @var bool
     */
    private bool $outputXml = false;
    /**
     * @var string
     */
    private string $errorFile;
    /**
     * @var bool
     */
    private bool $keepTime = false;
    /**
     * @var string
     */
    private string $outputFile;
    /**
     * @var bool
     */
    private bool $writeBack = false;
    /**
     * @var string
     */
    private string $accessibilityCheck = '0';
    /**
     * @var bool
     */
    private bool $forceOutput = false;
    /**
     * @var bool
     */
    private bool $showMetaChange = false;
    /**
     * @var bool
     */
    private bool $warnProprietaryAttributes = true;
    /**
     * @var string
     */
    private string $charString = 'utf8';
    /**
     * @var string
     */
    private string $inputString = 'utf8';
    /**
     * @var string
     */
    private string $newline = 'LF';
    /**
     * @var string
     */
    private string $outputBom = 'auto';
    /**
     * @var string
     */
    private string $outputString = 'utf8';
    /**
     * @var bool
     */
    private bool $bare = false;
    /**
     * @var bool
     */
    private bool $clean = false;
    /**
     * @var bool
     */
    private bool $dropEmptyElements = true;
    /**
     * @var bool
     */
    private bool $dropEmptyParas = true;
    /**
     * @var bool
     */
    private bool $dropProprietaryAttributes = false;
    /**
     * @var bool
     */
    private bool $gdoc = false;
    /**
     * @var bool
     */
    private bool $logicalEmphasis = false;
    /**
     * @var string
     */
    private string $mergeDivs = 'auto';
    /**
     * @var string
     */
    private string $mergeSpans = 'auto';
    /**
     * @var bool
     */
    private bool $word2000 = false;
    /**
     * @var bool
     */
    private bool $asciiChars = false;
    /**
     * @var bool
     */
    private bool $ncr = true;
    /**
     * @var bool
     */
    private bool $numericEntities = false;
    /**
     * @var bool
     */
    private bool $preserveEntities = false;
    /**
     * @var bool
     */
    private bool $quoteAmpersand = true;
    /**
     * @var bool
     */
    private bool $quoteMarks = false;
    /**
     * @var bool
     */
    private bool $quoteNbsp = true;
    /**
     * @var string
     */
    private string $altText;
    /**
     * @var bool
     */
    private bool $anchorAsName = true;
    /**
     * @var bool
     */
    private bool $assumeXmlProcins = false;
    /**
     * @var bool
     */
    private bool $coerceEndtags = true;
    /**
     * @var string
     */
    private string $cssPrefix = 'c';
    /**
     * @var string
     */
    private string $customTags = 'no';
    /**
     * @var bool
     */
    private bool $encloseBlockText = false;
    /**
     * @var bool
     */
    private bool $encloseText = false;
    /**
     * @var bool
     */
    private bool $escapeScripts = true;
    /**
     * @var bool
     */
    private bool $fixBackslash = true;
    /**
     * @var string
     */
    private string $fixBadComments = 'auto';
    /**
     * @var bool
     */
    private bool $fixStyleTags = true;
    /**
     * @var bool
     */
    private bool $fixUri = true;
    /**
     * @var bool
     */
    private bool $literalAttributes = false;
    /**
     * @var bool
     */
    private bool $lowerLiterals = true;
    /**
     * @var string
     */
    private string $repeatedAttributes = 'keep-last';
    /**
     * @var bool
     */
    private bool $skipNested = true;
    /**
     * @var bool
     */
    private bool $strictTagsAttributes = false;
    /**
     * @var string
     */
    private string $uppercaseAttributes = 'no';
    /**
     * @var bool
     */
    private bool $uppercaseTags = false;
    /**
     * @var bool
     */
    private bool $decorateInferredUl = false;
    /**
     * @var bool
     */
    private bool $escapeCdata = false;
    /**
     * @var bool
     */
    private bool $hideComments = false;
    /**
     * @var bool
     */
    private bool $joinClasses = false;
    /**
     * @var bool
     */
    private bool $joinStyles = true;
    /**
     * @var bool
     */
    private bool $mergeEmphasis = true;
    /**
     * @var bool
     */
    private bool $replaceColor = false;
    /**
     * @var string
     */
    private string $newBlocklevelTags;
    /**
     * @var string
     */
    private string $newEmptyTags;
    /**
     * @var string
     */
    private string $newInlineTags;
    /**
     * @var string
     */
    private string $newPreTags;
    /**
     * @var bool
     */
    private bool $breakBeforeBr = false;
    /**
     * @var string
     */
    private bool $indent = false;
    /**
     * @var bool
     */
    private bool $indentAttributes = false;
    /**
     * @var bool
     */
    private bool $indentCdata = false;
    /**
     * @var int
     */
    private int $indentSpaces = 2;
    /**
     * @var bool
     */
    private bool $indentWithTabs = false;
    /**
     * @var bool
     */
    private bool $keepTabs = false;
    /**
     * @var bool
     */
    private bool $omitOptionalTags = false;
    /**
     * @var string
     */
    private string $priorityAttributes;
    /**
     * @var bool
     */
    private bool $punctuationWrap = false;
    /**
     * @var string
     */
    private string $sortAttributes = 'none';
    /**
     * @var int
     */
    private int $tabSize = 8;
    /**
     * @var bool
     */
    private bool $tidyMark = true;
    /**
     * @var string
     */
    private string $verticalSpace = 'no';
    /**
     * @var int
     */
    private int $wrap = 68;
    /**
     * @var bool
     */
    private bool $wrapAsp = true;
    /**
     * @var bool
     */
    private bool $wrapAttributes = false;
    /**
     * @var bool
     */
    private bool $wrapJste = true;
    /**
     * @var bool
     */
    private bool $wrapPhp = false;
    /**
     * @var bool
     */
    private bool $wrapScriptLiterals = false;
    /**
     * @var bool
     */
    private bool $wrapSections = true;

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param array $config
     * @return TidyConfig
     */
    public function setConfig(array $config): TidyConfig
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharString(): string
    {
        return $this->charString;
    }

    /**
     * @param string $charString
     * @return TidyConfig
     */
    public function setCharString(string $charString): TidyConfig
    {
        $this->charString = $charString;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputString(): string
    {
        return $this->inputString;
    }

    /**
     * @param string $inputString
     * @return TidyConfig
     */
    public function setInputString(string $inputString): TidyConfig
    {
        $this->inputString = $inputString;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputString(): string
    {
        return $this->outputString;
    }

    /**
     * @param string $outputString
     * @return TidyConfig
     */
    public function setOutputString(string $outputString): TidyConfig
    {
        $this->outputString = $outputString;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function setGnuEmacs(bool $gnuEmacs): TidyConfig
    {
        $this->gnuEmacs = $gnuEmacs;
        $this->config['gnu-emacs'] = $gnuEmacs;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getGnuEmacs(): bool
    {
        return $this->gnuEmacs;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setMarkup(bool $markup): TidyConfig
    {
        $this->markup = $markup;
        $this->config['markup'] = $markup;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getMarkup(): bool
    {
        return $this->markup;
    }

    /**
     *
     * @param string (default: -)
     * @return TidyConfig
     */
    public function setMute(string $mute): TidyConfig
    {
        $this->mute = $mute;
        $this->config['mute'] = $mute;
        return $this;
    }


    /*
     *
     * @param string (default: -)
     */
    public function getMute(): string
    {
        return $this->mute;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setMuteId(bool $muteId): TidyConfig
    {
        $this->muteId = $muteId;
        $this->config['mute-id'] = $muteId;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getMuteId(): bool
    {
        return $this->muteId;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setQuiet(bool $quiet): TidyConfig
    {
        $this->quiet = $quiet;
        $this->config['quiet'] = $quiet;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getQuiet(): bool
    {
        return $this->quiet;
    }

    /**
     *
     * @param string
     * @return TidyConfig
     */
    public function setShowBodyOnly(string $showBodyOnly): TidyConfig
    {
        $this->showBodyOnly = $showBodyOnly;
        $this->config['show-body-only'] = $showBodyOnly;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getShowBodyOnly(): string
    {
        return $this->showBodyOnly;
    }

    /**
     *
     * @param int (default: 6)
     */
    public function setShowErrors(int $showErrors): TidyConfig
    {
        $this->showErrors = $showErrors;
        $this->config['show-errors'] = $showErrors;
        return $this;
    }

    /**
     *
     * @param int (default: 6)
     */
    public function getShowErrors(): int
    {
        return $this->showErrors;
    }

    /**
     *
     * @param bool
     */
    public function setShowFilename(bool $showFilename): TidyConfig
    {
        $this->showFilename = $showFilename;
        $this->config['show-filename'] = $showFilename;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getShowFilename(): bool
    {
        return $this->showFilename;
    }

    /**
     *
     * @param bool
     */
    public function setShowInfo(bool $showInfo): TidyConfig
    {
        $this->showInfo = $showInfo;
        $this->config['show-info'] = $showInfo;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getShowInfo(): bool
    {
        return $this->showInfo;
    }

    /**
     *
     * @param bool
     */
    public function setShowWarnings(bool $showWarnings): TidyConfig
    {
        $this->showWarnings = $showWarnings;
        $this->config['show-warnings'] = $showWarnings;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getShowWarnings(): bool
    {
        return $this->showWarnings;
    }

    /**
     *
     * @param bool
     */
    public function setAddMetaCharset(bool $addMetaCharset): TidyConfig
    {
        $this->addMetaCharset = $addMetaCharset;
        $this->config['add-meta-charset'] = $addMetaCharset;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getAddMetaCharset(): bool
    {
        return $this->addMetaCharset;
    }

    /**
     *
     * @param bool
     */
    public function setAddXmlDecl(bool $addXmlDecl): TidyConfig
    {
        $this->addXmlDecl = $addXmlDecl;
        $this->config['add-xml-decl'] = $addXmlDecl;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getAddXmlDecl(): bool
    {
        return $this->addXmlDecl;
    }

    /**
     *
     * @param bool
     */
    public function setAddXmlSpace(bool $addXmlSpace): TidyConfig
    {
        $this->addXmlSpace = $addXmlSpace;
        $this->config['add-xml-space'] = $addXmlSpace;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getAddXmlSpace(): bool
    {
        return $this->addXmlSpace;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function setDoctype(string $doctype): TidyConfig
    {
        $this->doctype = $doctype;
        $this->config['doctype'] = $doctype;
        return $this;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function getDoctype(): string
    {
        return $this->doctype;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setInputXml(bool $inputXml): TidyConfig
    {
        $this->inputXml = $inputXml;
        $this->config['input-xml'] = $inputXml;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getInputXml(): bool
    {
        return $this->inputXml;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setOutputHtml(bool $outputHtml): TidyConfig
    {
        $this->outputHtml = $outputHtml;
        $this->config['output-html'] = $outputHtml;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getOutputHtml(): bool
    {
        return $this->outputHtml;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setOutputXhtml(bool $outputXhtml): TidyConfig
    {
        $this->outputXhtml = $outputXhtml;
        $this->config['output-xhtml'] = $outputXhtml;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getOutputXhtml(): bool
    {
        return $this->outputXhtml;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setOutputXml(bool $outputXml): TidyConfig
    {
        $this->outputXml = $outputXml;
        $this->config['output-xml'] = $outputXml;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getOutputXml(): bool
    {
        return $this->outputXml;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setErrorFile(string $errorFile): TidyConfig
    {
        $this->errorFile = $errorFile;
        $this->config['error-file'] = $errorFile;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getErrorFile(): string
    {
        return $this->errorFile;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setKeepTime(bool $keepTime): TidyConfig
    {
        $this->keepTime = $keepTime;
        $this->config['keep-time'] = $keepTime;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getKeepTime(): bool
    {
        return $this->keepTime;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setOutputFile(string $outputFile): TidyConfig
    {
        $this->outputFile = $outputFile;
        $this->config['output-file'] = $outputFile;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getOutputFile(): string
    {
        return $this->outputFile;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWriteBack(bool $writeBack): TidyConfig
    {
        $this->writeBack = $writeBack;
        $this->config['write-back'] = $writeBack;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWriteBack(): bool
    {
        return $this->writeBack;
    }

    /**
     *
     * @param string (default: 0)
     */
    public function setAccessibilityCheck(string $accessibilityCheck): TidyConfig
    {
        $this->accessibilityCheck = $accessibilityCheck;
        $this->config['accessibility-check'] = $accessibilityCheck;
        return $this;
    }

    /**
     *
     * @param string (default: 0)
     */
    public function getAccessibilityCheck(): string
    {
        return $this->accessibilityCheck;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setForceOutput(bool $forceOutput): TidyConfig
    {
        $this->forceOutput = $forceOutput;
        $this->config['force-output'] = $forceOutput;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getForceOutput(): bool
    {
        return $this->forceOutput;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setShowMetaChange(bool $showMetaChange): TidyConfig
    {
        $this->showMetaChange = $showMetaChange;
        $this->config['show-meta-change'] = $showMetaChange;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getShowMetaChange(): bool
    {
        return $this->showMetaChange;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWarnProprietaryAttributes(bool $warnProprietaryAttributes): TidyConfig
    {
        $this->warnProprietaryAttributes = $warnProprietaryAttributes;
        $this->config['warn-proprietary-attributes'] = $warnProprietaryAttributes;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWarnProprietaryAttributes(): bool
    {
        return $this->warnProprietaryAttributes;
    }

    /**
     *
     * @param Encoding (default: utf8)
     */
    public function setInputEncoding(Encoding $inputEncoding): TidyConfig
    {
        $this->inputEncoding = $inputEncoding;
        $this->config['input-encoding'] = $inputEncoding;
        return $this;
    }

    /**
     *
     * @param Encoding (default: utf8)
     */
    public function getInputEncoding(): Encoding
    {
        return $this->inputEncoding;
    }

    /**
     *
     * @param string (default: LF)
     */
    public function setNewline(string $newline): TidyConfig
    {
        $this->newline = $newline;
        $this->config['newline'] = $newline;
        return $this;
    }

    /**
     *
     * @param string (default: LF)
     */
    public function getNewline(): string
    {
        return $this->newline;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function setOutputBom(string $outputBom): TidyConfig
    {
        $this->outputBom = $outputBom;
        $this->config['output-bom'] = $outputBom;
        return $this;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function getOutputBom(): string
    {
        return $this->outputBom;
    }



    /**
     *
     * @param bool
     */
    public function setBare(bool $bare): TidyConfig
    {
        $this->bare = $bare;
        $this->config['bare'] = $bare;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getBare(): bool
    {
        return $this->bare;
    }

    /**
     *
     * @param bool
     */
    public function setClean(bool $clean): TidyConfig
    {
        $this->clean = $clean;
        $this->config['clean'] = $clean;
        return $this;
    }

    /**
     *
     * @param bool
     */
    public function getClean(): bool
    {
        return $this->clean;
    }

    /**
     *
     * @param bool
     */
    public function setDropEmptyElements(bool $dropEmptyElements): TidyConfig
    {
        $this->dropEmptyElements = $dropEmptyElements;
        $this->config['drop-empty-elements'] = $dropEmptyElements;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getDropEmptyElements(): bool
    {
        return $this->dropEmptyElements;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setDropEmptyParas(bool $dropEmptyParas): TidyConfig
    {
        $this->dropEmptyParas = $dropEmptyParas;
        $this->config['drop-empty-paras'] = $dropEmptyParas;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getDropEmptyParas(): bool
    {
        return $this->dropEmptyParas;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setDropProprietaryAttributes(bool $dropProprietaryAttributes): TidyConfig
    {
        $this->dropProprietaryAttributes = $dropProprietaryAttributes;
        $this->config['drop-proprietary-attributes'] = $dropProprietaryAttributes;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getDropProprietaryAttributes(): bool
    {
        return $this->dropProprietaryAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setGdoc(bool $gdoc): TidyConfig
    {
        $this->gdoc = $gdoc;
        $this->config['gdoc'] = $gdoc;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getGdoc(): bool
    {
        return $this->gdoc;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setLogicalEmphasis(bool $logicalEmphasis): TidyConfig
    {
        $this->logicalEmphasis = $logicalEmphasis;
        $this->config['logical-emphasis'] = $logicalEmphasis;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getLogicalEmphasis(): bool
    {
        return $this->logicalEmphasis;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function setMergeDivs(string $mergeDivs): TidyConfig
    {
        $this->mergeDivs = $mergeDivs;
        $this->config['merge-divs'] = $mergeDivs;
        return $this;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function getMergeDivs(): string
    {
        return $this->mergeDivs;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function setMergeSpans(string $mergeSpans): TidyConfig
    {
        $this->mergeSpans = $mergeSpans;
        $this->config['merge-spans'] = $mergeSpans;
        return $this;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function getMergeSpans(): string
    {
        return $this->mergeSpans;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWord2000(bool $word2000): TidyConfig
    {
        $this->word2000 = $word2000;
        $this->config['word-2000'] = $word2000;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWord2000(): bool
    {
        return $this->word2000;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setAsciiChars(bool $asciiChars): TidyConfig
    {
        $this->asciiChars = $asciiChars;
        $this->config['ascii-chars'] = $asciiChars;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getAsciiChars(): bool
    {
        return $this->asciiChars;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setNcr(bool $ncr): TidyConfig
    {
        $this->ncr = $ncr;
        $this->config['ncr'] = $ncr;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getNcr(): bool
    {
        return $this->ncr;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setNumericEntities(bool $numericEntities): TidyConfig
    {
        $this->numericEntities = $numericEntities;
        $this->config['numeric-entities'] = $numericEntities;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getNumericEntities(): bool
    {
        return $this->numericEntities;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setPreserveEntities(bool $preserveEntities): TidyConfig
    {
        $this->preserveEntities = $preserveEntities;
        $this->config['preserve-entities'] = $preserveEntities;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getPreserveEntities(): bool
    {
        return $this->preserveEntities;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setQuoteAmpersand(bool $quoteAmpersand): TidyConfig
    {
        $this->quoteAmpersand = $quoteAmpersand;
        $this->config['quote-ampersand'] = $quoteAmpersand;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getQuoteAmpersand(): bool
    {
        return $this->quoteAmpersand;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setQuoteMarks(bool $quoteMarks): TidyConfig
    {
        $this->quoteMarks = $quoteMarks;
        $this->config['quote-marks'] = $quoteMarks;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getQuoteMarks(): bool
    {
        return $this->quoteMarks;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setQuoteNbsp(bool $quoteNbsp): TidyConfig
    {
        $this->quoteNbsp = $quoteNbsp;
        $this->config['quote-nbsp'] = $quoteNbsp;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getQuoteNbsp(): bool
    {
        return $this->quoteNbsp;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setAltText(string $altText): TidyConfig
    {
        $this->altText = $altText;
        $this->config['alt-text'] = $altText;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getAltText(): string
    {
        return $this->altText;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setAnchorAsName(bool $anchorAsName): TidyConfig
    {
        $this->anchorAsName = $anchorAsName;
        $this->config['anchor-as-name'] = $anchorAsName;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getAnchorAsName(): bool
    {
        return $this->anchorAsName;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setAssumeXmlProcins(bool $assumeXmlProcins): TidyConfig
    {
        $this->assumeXmlProcins = $assumeXmlProcins;
        $this->config['assume-xml-procins'] = $assumeXmlProcins;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getAssumeXmlProcins(): bool
    {
        return $this->assumeXmlProcins;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setCoerceEndtags(bool $coerceEndtags): TidyConfig
    {
        $this->coerceEndtags = $coerceEndtags;
        $this->config['coerce-endtags'] = $coerceEndtags;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getCoerceEndtags(): bool
    {
        return $this->coerceEndtags;
    }

    /**
     *
     * @param string (default: c)
     */
    public function setCssPrefix(string $cssPrefix): TidyConfig
    {
        $this->cssPrefix = $cssPrefix;
        $this->config['css-prefix'] = $cssPrefix;
        return $this;
    }

    /**
     *
     * @param string (default: c)
     */
    public function getCssPrefix(): string
    {
        return $this->cssPrefix;
    }

    /**
     *
     * @param string
     * @return TidyConfig
     */
    public function setCustomTags(string $customTags): TidyConfig
    {
        $this->customTags = $customTags;
        $this->config['custom-tags'] = $customTags;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomTags(): string
    {
        return $this->customTags;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setEncloseBlockText(bool $encloseBlockText): TidyConfig
    {
        $this->encloseBlockText = $encloseBlockText;
        $this->config['enclose-block-text'] = $encloseBlockText;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getEncloseBlockText(): bool
    {
        return $this->encloseBlockText;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setEncloseText(bool $encloseText): TidyConfig
    {
        $this->encloseText = $encloseText;
        $this->config['enclose-text'] = $encloseText;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getEncloseText(): bool
    {
        return $this->encloseText;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setEscapeScripts(bool $escapeScripts): TidyConfig
    {
        $this->escapeScripts = $escapeScripts;
        $this->config['escape-scripts'] = $escapeScripts;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getEscapeScripts(): bool
    {
        return $this->escapeScripts;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setFixBackslash(bool $fixBackslash): TidyConfig
    {
        $this->fixBackslash = $fixBackslash;
        $this->config['fix-backslash'] = $fixBackslash;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getFixBackslash(): bool
    {
        return $this->fixBackslash;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function setFixBadComments(string $fixBadComments): TidyConfig
    {
        $this->fixBadComments = $fixBadComments;
        $this->config['fix-bad-comments'] = $fixBadComments;
        return $this;
    }

    /**
     *
     * @param string (default: auto)
     */
    public function getFixBadComments(): string
    {
        return $this->fixBadComments;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setFixStyleTags(bool $fixStyleTags): TidyConfig
    {
        $this->fixStyleTags = $fixStyleTags;
        $this->config['fix-style-tags'] = $fixStyleTags;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getFixStyleTags(): bool
    {
        return $this->fixStyleTags;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setFixUri(bool $fixUri): TidyConfig
    {
        $this->fixUri = $fixUri;
        $this->config['fix-uri'] = $fixUri;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getFixUri(): bool
    {
        return $this->fixUri;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setLiteralAttributes(bool $literalAttributes): TidyConfig
    {
        $this->literalAttributes = $literalAttributes;
        $this->config['literal-attributes'] = $literalAttributes;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getLiteralAttributes(): bool
    {
        return $this->literalAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setLowerLiterals(bool $lowerLiterals): TidyConfig
    {
        $this->lowerLiterals = $lowerLiterals;
        $this->config['lower-literals'] = $lowerLiterals;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getLowerLiterals(): bool
    {
        return $this->lowerLiterals;
    }

    /**
     *
     * @param string (default: keep-last)
     */
    public function setRepeatedAttributes(string $repeatedAttributes): TidyConfig
    {
        $this->repeatedAttributes = $repeatedAttributes;
        $this->config['repeated-attributes'] = $repeatedAttributes;
        return $this;
    }

    /**
     *
     * @param string (default: keep-last)
     */
    public function getRepeatedAttributes(): string
    {
        return $this->repeatedAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setSkipNested(bool $skipNested): TidyConfig
    {
        $this->skipNested = $skipNested;
        $this->config['skip-nested'] = $skipNested;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getSkipNested(): bool
    {
        return $this->skipNested;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setStrictTagsAttributes(bool $strictTagsAttributes): TidyConfig
    {
        $this->strictTagsAttributes = $strictTagsAttributes;
        $this->config['strict-tags-attributes'] = $strictTagsAttributes;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getStrictTagsAttributes(): bool
    {
        return $this->strictTagsAttributes;
    }

    /**
     *
     * @param string
     * @return TidyConfig
     */
    public function setUppercaseAttributes(string $uppercaseAttributes): TidyConfig
    {
        $this->uppercaseAttributes = $uppercaseAttributes;
        $this->config['uppercase-attributes'] = $uppercaseAttributes;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getUppercaseAttributes(): string
    {
        return $this->uppercaseAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setUppercaseTags(bool $uppercaseTags): TidyConfig
    {
        $this->uppercaseTags = $uppercaseTags;
        $this->config['uppercase-tags'] = $uppercaseTags;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getUppercaseTags(): bool
    {
        return $this->uppercaseTags;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setDecorateInferredUl(bool $decorateInferredUl): TidyConfig
    {
        $this->decorateInferredUl = $decorateInferredUl;
        $this->config['decorate-inferred-ul'] = $decorateInferredUl;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getDecorateInferredUl(): bool
    {
        return $this->decorateInferredUl;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setEscapeCdata(bool $escapeCdata): TidyConfig
    {
        $this->escapeCdata = $escapeCdata;
        $this->config['escape-cdata'] = $escapeCdata;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getEscapeCdata(): bool
    {
        return $this->escapeCdata;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setHideComments(bool $hideComments): TidyConfig
    {
        $this->hideComments = $hideComments;
        $this->config['hide-comments'] = $hideComments;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getHideComments(): bool
    {
        return $this->hideComments;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setJoinClasses(bool $joinClasses): TidyConfig
    {
        $this->joinClasses = $joinClasses;
        $this->config['join-classes'] = $joinClasses;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getJoinClasses(): bool
    {
        return $this->joinClasses;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setJoinStyles(bool $joinStyles): TidyConfig
    {
        $this->joinStyles = $joinStyles;
        $this->config['join-styles'] = $joinStyles;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getJoinStyles(): bool
    {
        return $this->joinStyles;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setMergeEmphasis(bool $mergeEmphasis): TidyConfig
    {
        $this->mergeEmphasis = $mergeEmphasis;
        $this->config['merge-emphasis'] = $mergeEmphasis;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getMergeEmphasis(): bool
    {
        return $this->mergeEmphasis;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setReplaceColor(bool $replaceColor): TidyConfig
    {
        $this->replaceColor = $replaceColor;
        $this->config['replace-color'] = $replaceColor;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getReplaceColor(): bool
    {
        return $this->replaceColor;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setNewBlocklevelTags(string $newBlocklevelTags): TidyConfig
    {
        $this->newBlocklevelTags = $newBlocklevelTags;
        $this->config['new-blocklevel-tags'] = $newBlocklevelTags;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getNewBlocklevelTags(): string
    {
        return $this->newBlocklevelTags;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setNewEmptyTags(string $newEmptyTags): TidyConfig
    {
        $this->newEmptyTags = $newEmptyTags;
        $this->config['new-empty-tags'] = $newEmptyTags;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getNewEmptyTags(): string
    {
        return $this->newEmptyTags;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setNewInlineTags(string $newInlineTags): TidyConfig
    {
        $this->newInlineTags = $newInlineTags;
        $this->config['new-inline-tags'] = $newInlineTags;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getNewInlineTags(): string
    {
        return $this->newInlineTags;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setNewPreTags(string $newPreTags): TidyConfig
    {
        $this->newPreTags = $newPreTags;
        $this->config['new-pre-tags'] = $newPreTags;
        return $this;
    }

    /**
     *
     * @param string (default: -)
     */
    public function getNewPreTags(): string
    {
        return $this->newPreTags;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setBreakBeforeBr(bool $breakBeforeBr): TidyConfig
    {
        $this->breakBeforeBr = $breakBeforeBr;
        $this->config['break-before-br'] = $breakBeforeBr;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getBreakBeforeBr(): bool
    {
        return $this->breakBeforeBr;
    }

    /**
     *
     * @param bool $indent
     * @return TidyConfig
     */
    public function setIndent(bool $indent): TidyConfig
    {
        $this->indent = $indent;
        $this->config['indent'] = $indent;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getIndent(): string
    {
        return $this->indent;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setIndentAttributes(bool $indentAttributes): TidyConfig
    {
        $this->indentAttributes = $indentAttributes;
        $this->config['indent-attributes'] = $indentAttributes;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getIndentAttributes(): bool
    {
        return $this->indentAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setIndentCdata(bool $indentCdata): TidyConfig
    {
        $this->indentCdata = $indentCdata;
        $this->config['indent-cdata'] = $indentCdata;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getIndentCdata(): bool
    {
        return $this->indentCdata;
    }

    /**
     *
     * @param int (default: 2)
     */
    public function setIndentSpaces(int $indentSpaces): TidyConfig
    {
        $this->indentSpaces = $indentSpaces;
        $this->config['indent-spaces'] = $indentSpaces;
        return $this;
    }

    /**
     *
     * @param int (default: 2)
     */
    public function getIndentSpaces(): int
    {
        return $this->indentSpaces;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setIndentWithTabs(bool $indentWithTabs): TidyConfig
    {
        $this->indentWithTabs = $indentWithTabs;
        $this->config['indent-with-tabs'] = $indentWithTabs;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getIndentWithTabs(): bool
    {
        return $this->indentWithTabs;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setKeepTabs(bool $keepTabs): TidyConfig
    {
        $this->keepTabs = $keepTabs;
        $this->config['keep-tabs'] = $keepTabs;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getKeepTabs(): bool
    {
        return $this->keepTabs;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setOmitOptionalTags(bool $omitOptionalTags): TidyConfig
    {
        $this->omitOptionalTags = $omitOptionalTags;
        $this->config['omit-optional-tags'] = $omitOptionalTags;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getOmitOptionalTags(): bool
    {
        return $this->omitOptionalTags;
    }

    /**
     *
     * @param string (default: -)
     */
    public function setPriorityAttributes(string $priorityAttributes): TidyConfig
    {
        $this->priorityAttributes = $priorityAttributes;
        $this->config['priority-attributes'] = $priorityAttributes;
        return $this;
    }

    /**
     *
     * @return  string
     */
    public function getPriorityAttributes(): string
    {
        return $this->priorityAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setPunctuationWrap(bool $punctuationWrap): TidyConfig
    {
        $this->punctuationWrap = $punctuationWrap;
        $this->config['punctuation-wrap'] = $punctuationWrap;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getPunctuationWrap(): bool
    {
        return $this->punctuationWrap;
    }

    /**
     *
     * @param string (default: none)
     */
    public function setSortAttributes(string $sortAttributes): TidyConfig
    {
        $this->sortAttributes = $sortAttributes;
        $this->config['sort-attributes'] = $sortAttributes;
        return $this;
    }

    /**
     *
     * @param string (default: none)
     */
    public function getSortAttributes(): string
    {
        return $this->sortAttributes;
    }

    /**
     *
     * @param int (default: 8)
     */
    public function setTabSize(int $tabSize): TidyConfig
    {
        $this->tabSize = $tabSize;
        $this->config['tab-size'] = $tabSize;
        return $this;
    }

    /**
     *
     * @param int (default: 8)
     */
    public function getTabSize(): int
    {
        return $this->tabSize;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setTidyMark(bool $tidyMark): TidyConfig
    {
        $this->tidyMark = $tidyMark;
        $this->config['tidy-mark'] = $tidyMark;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getTidyMark(): bool
    {
        return $this->tidyMark;
    }

    /**
     *
     * @param string
     * @return TidyConfig
     */
    public function setVerticalSpace(string $verticalSpace): TidyConfig
    {
        $this->verticalSpace = $verticalSpace;
        $this->config['vertical-space'] = $verticalSpace;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getVerticalSpace(): string
    {
        return $this->verticalSpace;
    }

    /**
     *
     * @param int (default: 68)
     */
    public function setWrap(int $wrap): TidyConfig
    {
        $this->wrap = $wrap;
        $this->config['wrap'] = $wrap;
        return $this;
    }

    /**
     *
     * @param int (default: 68)
     */
    public function getWrap(): int
    {
        return $this->wrap;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapAsp(bool $wrapAsp): TidyConfig
    {
        $this->wrapAsp = $wrapAsp;
        $this->config['wrap-asp'] = $wrapAsp;
        return $this;
    }

    /**
     *
     * @return  bool
     */
    public function getWrapAsp(): bool
    {
        return $this->wrapAsp;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapAttributes(bool $wrapAttributes): TidyConfig
    {
        $this->wrapAttributes = $wrapAttributes;
        $this->config['wrap-attributes'] = $wrapAttributes;
        return $this;
    }

    /**
     *
     * @return  bool
     */
    public function getWrapAttributes(): bool
    {
        return $this->wrapAttributes;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapJste(bool $wrapJste): TidyConfig
    {
        $this->wrapJste = $wrapJste;
        $this->config['wrap-jste'] = $wrapJste;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWrapJste(): bool
    {
        return $this->wrapJste;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapPhp(bool $wrapPhp): TidyConfig
    {
        $this->wrapPhp = $wrapPhp;
        $this->config['wrap-php'] = $wrapPhp;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWrapPhp(): bool
    {
        return $this->wrapPhp;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapScriptLiterals(bool $wrapScriptLiterals): TidyConfig
    {
        $this->wrapScriptLiterals = $wrapScriptLiterals;
        $this->config['wrap-script-literals'] = $wrapScriptLiterals;
        return $this;
    }

    /**
     *
     * @return  bool
     */
    public function getWrapScriptLiterals(): bool
    {
        return $this->wrapScriptLiterals;
    }

    /**
     *
     * @param bool
     * @return TidyConfig
     */
    public function setWrapSections(bool $wrapSections): TidyConfig
    {
        $this->wrapSections = $wrapSections;
        $this->config['wrap-sections'] = $wrapSections;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getWrapSections(): bool
    {
        return $this->wrapSections;
    }

}
