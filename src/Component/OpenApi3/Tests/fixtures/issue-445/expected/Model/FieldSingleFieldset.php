<?php

namespace PicturePark\API\Model;

class FieldSingleFieldset
{
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @var string
     */
    protected $id;
    /**
     * The index ID is auto generated by the system.
     *
     * @var string|null
     */
    protected $indexId;
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @var string|null
     */
    protected $fieldNamespace;
    /**
     * Language specific field names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific field descriptions.
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * Defines if a field value is mandatory or not.
     *
     * @var bool
     */
    protected $required;
    /**
     * Defines if the field can be edited or not.
     *
     * @var bool
     */
    protected $fixed;
    /**
     * Field is stored for filtering.
     *
     * @var bool
     */
    protected $index;
    /**
     * Field is stored for simple search.
     *
     * @var bool
     */
    protected $simpleSearch;
    /**
     * Field is stored for sorting.
     *
     * @var bool
     */
    protected $sortable;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var mixed|null
     */
    protected $schemaIndexingInfo;
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The index ID is auto generated by the system.
     *
     * @return string|null
     */
    public function getIndexId() : ?string
    {
        return $this->indexId;
    }
    /**
     * The index ID is auto generated by the system.
     *
     * @param string|null $indexId
     *
     * @return self
     */
    public function setIndexId(?string $indexId) : self
    {
        $this->indexId = $indexId;
        return $this;
    }
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @return string|null
     */
    public function getFieldNamespace() : ?string
    {
        return $this->fieldNamespace;
    }
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @param string|null $fieldNamespace
     *
     * @return self
     */
    public function setFieldNamespace(?string $fieldNamespace) : self
    {
        $this->fieldNamespace = $fieldNamespace;
        return $this;
    }
    /**
     * Language specific field names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific field names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific field descriptions.
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Language specific field descriptions.
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * Defines if a field value is mandatory or not.
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * Defines if a field value is mandatory or not.
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Defines if the field can be edited or not.
     *
     * @return bool
     */
    public function getFixed() : bool
    {
        return $this->fixed;
    }
    /**
     * Defines if the field can be edited or not.
     *
     * @param bool $fixed
     *
     * @return self
     */
    public function setFixed(bool $fixed) : self
    {
        $this->fixed = $fixed;
        return $this;
    }
    /**
     * Field is stored for filtering.
     *
     * @return bool
     */
    public function getIndex() : bool
    {
        return $this->index;
    }
    /**
     * Field is stored for filtering.
     *
     * @param bool $index
     *
     * @return self
     */
    public function setIndex(bool $index) : self
    {
        $this->index = $index;
        return $this;
    }
    /**
     * Field is stored for simple search.
     *
     * @return bool
     */
    public function getSimpleSearch() : bool
    {
        return $this->simpleSearch;
    }
    /**
     * Field is stored for simple search.
     *
     * @param bool $simpleSearch
     *
     * @return self
     */
    public function setSimpleSearch(bool $simpleSearch) : self
    {
        $this->simpleSearch = $simpleSearch;
        return $this;
    }
    /**
     * Field is stored for sorting.
     *
     * @return bool
     */
    public function getSortable() : bool
    {
        return $this->sortable;
    }
    /**
     * Field is stored for sorting.
     *
     * @param bool $sortable
     *
     * @return self
     */
    public function setSortable(bool $sortable) : self
    {
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @return string
     */
    public function getSchemaId() : string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @param string $schemaId
     *
     * @return self
     */
    public function setSchemaId(string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @return mixed
     */
    public function getSchemaIndexingInfo()
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @param mixed $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo($schemaIndexingInfo) : self
    {
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
}