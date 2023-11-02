import add from "./calculate";

describe('calculate v1', () => {
    it('adds two numbers', () => {
        // arrange

        // act
        const result = add(2,4);

        //assert
        expect(result).toBe(6);
    })

    it.each([
        [1, 2, 3],
        [0, 0, 0],
        [-1, 6, 5],
        [4, -2, 2],
        [1, -7, -6],
        [-3, 2, -1],
        [-5, -4, -9],
        [0, -8, -8],
    ])('adds numbers', (one, two, result) => {

        expect(add(one, two)).toBe(result)
    })
});
