    /**
     * Include {{ $include->relationship }}.
     *
     * @param \{{ $subject->model }} ${{ $subject->object }}
     * @param \League\Fractal\ParamBag|null $params
     * @return \League\Fractal\Resource\Collection
     */
    public function {{ $include->method }}({{ $subject->basename }} ${{ $subject->object }}, ParamBag $params = null)
    {
        $transformer = new {{ $include->transformer }}($params);

        extract($transformer->get());

        ${{ $include->relationship }} = ${{ $subject->object }}->{{ $include->relationship }}()->limit($limit)->offset($offset)->orderBy($sort, $order)->get();

        return $this->collection(${{ $include->relationship }}, $transformer);
    }