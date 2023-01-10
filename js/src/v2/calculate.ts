import {getNumberFromStorage} from "./storage";

const addFromDatabase = (input: number): number => getNumberFromStorage() + input;

export default addFromDatabase;
