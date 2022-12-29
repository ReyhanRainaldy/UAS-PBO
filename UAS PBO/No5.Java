class Animal {
    protected int legs;

    public Animal(int legs) {
        this.legs = legs;
    }

    public void walk() {
    }

    public void eat() {
    }
}

interface Pet {
    public String getName();
    public void setName(String name);
    public void play();
}

class Tarantula extends Animal {
    public Tarantula() {
        super(8);
    }

    @Override
    public void eat() {
    }
}

class Cow extends Animal implements Pet {
    private String name;

    public Cow(String name) {
        super(4);
        this.name = name;
    }

    public Cow() {
        super(4);
    }

    @Override
    public String getName() {
        return name;
    }

    @Override
    public void setName(String name) {
        this.name = name;
    }

    @Override
    public void play() {
    }

    @Override
    public void eat() {
    }
}

class Snake extends Animal implements Pet {
    private String name;

    public Snake() {
        super(0);
    }

    @Override
    public String getName() {
        return name;
    }

    @Override
    public void setName(String name) {
        this.name = name;
    }

    @Override
    public void play() {
    }

    @Override
    public void walk() {
    }

    @Override
    public void eat() {
    }
}